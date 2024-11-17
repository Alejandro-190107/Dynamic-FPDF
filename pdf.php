<?php

    include_once('assets/connection/connection.php'); //* Include the database connection file.
    include_once('assets/fpdf/fpdf.php'); //* Include the FPDF file.

    ob_clean(); // Clear any previous output.
    header('Content-Type: application/pdf'); //! Tells the browser that a PDF will be sent.

    //* Custom class that extends FPDF to customize the header, footer, and tables.
    class PDF extends FPDF {

        //* Function for the PDF header.
        function Header() {

            $this->Image('assets/img/logo-pdf.png', 10, 10, 30); // Insert the logo in the upper left corner
            $this->Ln(15); // Line break.

           // Set font and color for the title.
            $this->SetFont('Arial', 'BI', 30);
            $this->SetTextColor(220, 50, 50);
            $this->Cell(60); // Move to the right.

            // Write the title centered.
            $this->Cell(70, 10, utf8_decode('Country Data'), 0, 0, 'C');
            $this->Ln(20); // Line break.

            // Set the background and text color for the table header.
            $this->SetFillColor(220, 220, 220);
            $this->SetTextColor(220, 50, 50);

            // Set the header font.
            $this->SetFont('Courier', 'BI', 13);

            // Draw the table header cells.
            $this->Cell(55, 10, 'Country Name', 1, 0, 'C', true);
            $this->Cell(45, 10, 'Continent', 1, 0, 'C', true);
            $this->Cell(55, 10, 'Region', 1, 0, 'C', true);
            $this->Cell(35, 10, 'Population', 1, 1, 'C', true);
        }

        //* Function for the PDF footer.
        function Footer() {

            $this->SetY(-15); // Position 15mm from the end of the page.
            $this->SetFont('Times', 'BI', 10);
            $this->SetTextColor(220, 50, 50);

            //! Add centered page number.
            $this->Cell(0, 10, utf8_decode('Pages ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }

        //* Custom function to generate a table with alternating colors.
        function FancyTable($data) {
            $this->SetFont('Times', 'B', 10); // Set the table source.

            $fill = false; // Toggle the color of the rows.
            $this->SetFillColor(240, 240, 240); // Background color for alternating rows.
            $this->SetTextColor(0); // Black text color.

            //! Loop through the data and generate the table rows.
            foreach ($data as $row) {
                $this->Cell(55, 10, utf8_decode($row['Name']), 1, 0, 'L', $fill);   
                $this->Cell(45, 10, $row['Continent'], 1, 0, 'C', $fill);
                $this->Cell(55, 10, $row['Region'], 1, 0, 'L', $fill);
                $this->Cell(35, 10, utf8_decode($row['Population']), 1, 1, 'C', $fill);

                $fill = !$fill; // Toggle the background color on each row.
            }
        }
    }

    //! SQL query to obtain the data from the "country" table.
    $stmt = $pdo->query('SELECT Name, Continent, Region, Population FROM country');

    // Get all results as an associative array.
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

   //* Create an instance of the PDF class.
    $pdf = new PDF();
    $pdf->AliasNbPages(); // Set the format to display the total number of pages.
    $pdf->AddPage(); // Add a new page.
    $pdf->FancyTable($data); // Call the custom function to generate the table with the data.

    // Output the PDF file to the browser.
    $pdf->Output();
?>