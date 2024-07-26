import { jsPDF } from 'jspdf';
import 'jspdf-autotable';

window.generatePDF = function () {
    const doc = new jsPDF();

    // Header
    doc.setFontSize(20);
    doc.text("Invoice", 14, 22);

    // Client Information
    const clientInfo = `
        Volt LLC.
        59 Jermyn Street
        London, UK
        George@anavue.org
    `;
    doc.setFontSize(10);
    doc.text(clientInfo, 14, 30);

    // Invoice details
    const invoiceDetails = `
        Invoice No.: 00123
        Date Issued: 31/03/2020
        Date Due: 25/07/2024
    `;
    doc.text(invoiceDetails, 140, 30);

    // Table
    doc.autoTable({
        head: [['Item', 'Description', 'Price', 'Qty', 'Total']],
        body: Array.from(document.querySelectorAll('#invoice-table tbody tr')).map(row => 
            Array.from(row.querySelectorAll('th, td')).map(cell => cell.innerText)
        ),
        startY: 50,
    });

    // Totals
    const totals = `
        Subtotal: ${document.getElementById('subtotal').innerText}
        Discount (20%): ${document.getElementById('discount').innerText}
        VAT (10%): ${document.getElementById('vat').innerText}
        Total: ${document.getElementById('total').innerText}
    `;
    doc.text(totals, 14, doc.autoTable.previous.finalY + 10);

    doc.save('invoice.pdf');
}
