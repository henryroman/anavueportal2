<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-primary me-2" onclick="addRow()">
                Add Row
            </button>
            <button type="button" class="btn btn-success" onclick="generatePDF()">
                Generate PDF
            </button>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-12 col-xl-9">
        <div class="card shadow border-0 p-4 p-md-5 position-relative">
            <div class="d-flex justify-content-between pb-4 pb-md-5 mb-4 mb-md-5 border-bottom border-light">
                <img class="image-md" src="{{ asset('assets/img/brand/light.svg') }}" height="30" width="30" alt="Rocket Logo">
                <div>
                    <h4 contenteditable="true">Volt LLC.</h4>
                    <ul class="list-group simple-list">
                        <li class="list-group-item fw-normal" contenteditable="true">59 Jermyn Street</li>
                        <li class="list-group-item fw-normal" contenteditable="true">London, UK</li>
                        <li class="list-group-item fw-normal"><a class="fw-bold text-primary" href="mailto:George@anavue.org" contenteditable="true">George@anavue.org</a></li>
                    </ul> 
                </div>
            </div>
            <div class="mb-6 d-flex align-items-center justify-content-center">
                <h2 class="h1 mb-0" contenteditable="true">Invoice #00123</h2>
                <span class="badge badge-lg bg-success ms-4" contenteditable="true">Paid</span>
            </div>
            <div class="row justify-content-between mb-4 mb-md-5">
                <div class="col-sm">
                    <h5>Client Information:</h5>
                    <div>
                        <ul class="list-group simple-list">
                            <li class="list-group-item fw-normal" id="client-name" contenteditable="true">Name</li>
                            <li class="list-group-item fw-normal" id="client-company" contenteditable="true">Company name</li>
                            <li class="list-group-item fw-normal" id="client-address" contenteditable="true">Company address</li>
                            <li class="list-group-item fw-normal"><a class="fw-bold text-primary" id="client-email" href="mailto:" contenteditable="true">Email@</a></li>
                        </ul> 
                    </div>
                </div>
                <div class="col-sm col-lg-4">
                    <dl class="row text-sm-right">
                        <dt class="col-6"><strong>Invoice No.</strong></dt>
                        <dd class="col-6" contenteditable="true">00123</dd>
                        <dt class="col-6"><strong>Date Issued:</strong></dt>
                        <dd class="col-6" id="date-issued" contenteditable="true">31/03/2020</dd>
                        <dt class="col-6"><strong>Date Due:</strong></dt>
                        <dd class="col-6" id="date-due" contenteditable="true">25/07/2024</dd>
                    </dl>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table mb-0" id="invoice-table">
                            <thead class="bg-light border-top">
                                <tr>
                                    <th scope="row" class="border-0 text-left">Item</th>
                                    <th scope="row" class="border-0">Description</th>
                                    <th scope="row" class="border-0">Price</th>
                                    <th scope="row" class="border-0">Qty</th>
                                    <th scope="row" class="border-0">Total</th>
                                    <th scope="row" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr contenteditable="true">
                                    <th scope="row" class="text-left fw-bold h6">Origin License</th>
                                    <td>Extended License</td>
                                    <td>999.00</td>
                                    <td>1</td>
                                    <td>999.00</td>
                                    <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end text-right mb-4 py-4">
                        <div class="mt-4">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left"><strong>Subtotal</strong></td>
                                        <td class="right" id="subtotal">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Discount (20%)</strong></td>
                                        <td class="right" id="discount">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>VAT (10%)</strong></td>
                                        <td class="right" id="vat">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Total</strong></td>
                                        <td class="right"><strong id="total">$0.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4>Payments to:</h4>
                    <span contenteditable="true">George@anavue.org</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function removeRow(button) {
        button.closest('tr').remove();
        updateTotals();
    }

    document.querySelector('#invoice-table tbody').addEventListener('input', updateTotals);

    function updateTotals() {
        let subtotal = 0;
        document.querySelectorAll('#invoice-table tbody tr').forEach(row => {
            const price = parseFloat(row.children[2].innerText) || 0;
            const qty = parseFloat(row.children[3].innerText) || 0;
            const total = price * qty;
            row.children[4].innerText = total.toFixed(2);
            subtotal += total;
        });

        document.getElementById('subtotal').innerText = `$${subtotal.toFixed(2)}`;

        const discount = subtotal * 0.20;
        document.getElementById('discount').innerText = `$${discount.toFixed(2)}`;

        const vat = (subtotal - discount) * 0.10;
        document.getElementById('vat').innerText = `$${vat.toFixed(2)}`;

        const total = subtotal - discount + vat;
        document.getElementById('total').innerText = `$${total.toFixed(2)}`;
    }

    function generatePDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.text("Invoice", 10, 10);
        doc.autoTable({
            head: [['Item', 'Description', 'Price', 'Qty', 'Total']],
            body: Array.from(document.querySelectorAll('#invoice-table tbody tr')).map(row => 
                Array.from(row.querySelectorAll('th, td')).map(cell => cell.innerText)
            )
        });

        doc.save('invoice.pdf');
    }

    function addRow() {
        const tableBody = document.querySelector('#invoice-table tbody');
        const row = document.createElement('tr');
        row.setAttribute('contenteditable', 'true');
        row.innerHTML = `
            <th scope="row" class="text-left fw-bold h6"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
        `;
        tableBody.appendChild(row);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
