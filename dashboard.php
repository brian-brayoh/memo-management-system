<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Memo Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional custom styling */
        .navbar {
            margin-bottom: 20px;
        }

        .dashboard-container {
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h1, h2 {
            color: #333;
        }

        table, th, td {
            text-align: left;
            color: #333;
        }

        th {
            background-color: #f8f9fa;
        }

        tr:nth-child(even) {
            background-color: #f4f4f9;
        }

        /* Custom modal styles */
        .modal-body {
            max-height: 80vh;
            overflow-y: auto;
        }

        /* Custom style for Add Memo Button */
        .btn-add-memo {
            background-color: #28a745; /* Green background */
            color: #fff; /* White text */
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-add-memo:hover {
            background-color: #218838; /* Darker green on hover */
            transform: translateY(-2px); /* Subtle upward movement */
        }

        .btn-add-memo:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); /* Focus effect */
        }

        /* Custom style for Analytics Box */
        .analytics-box {
            background: #f1f1f1;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }

        .analytics-box h3 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .analytics-box p {
            color: #555;
            font-size: 18px;
        }

        .analytics-box .total {
            font-size: 36px;
            font-weight: bold;
            color: #28a745; /* Green color for the total number */
        }
        <style>
/* Style for the floating result box */
.floating-result-box {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
    max-width: 600px;
    background-color: #fefefe;
    border: 1px solid #888;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    z-index: 9999;
    display: none;
}

/* Close button style */
.floating-result-box .close {
    color: #aaa;
    font-size: 30px;
    font-weight: bold;
    float: right;
    cursor: pointer;
}

.floating-result-box .close:hover,
.floating-result-box .close:focus {
    color: black;
    text-decoration: none;
}
</style>

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Memo Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-add-memo" href="#" data-toggle="modal" data-target="#addMemoModal">Add Memo</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Home Page -->
<div class="container">
    <div class="dashboard-container">
        <h1>Home</h1>
        <div class="row">
            <!-- Analytics Box for Total Memos -->
            <div class="col-md-4">
                <div class="analytics-box">
                    <h3>Total Memos</h3>
                    <p>In the system</p>
                    <div class="total">
                        <?php include 'memo_count.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dashboard / Search Memo -->
<div class="container">
    <div class="dashboard-container">
        <h2>Search Memo by Serial Number</h2>
        <form id="search-form" class="form-inline">
            <input type="text" id="serial_no" name="serial_no" placeholder="Enter Serial Number" class="form-control mr-2" required>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <div id="memo-results" class="memo-results"></div>
    </div>
</div>

<!-- Floating Results Box (hidden by default) -->
<div id="floatingResultBox" class="floating-result-box" style="display:none;">
    <span class="close" onclick="closeResultBox()">&times;</span>
    <div id="resultContent"></div>
</div>



<!-- Modal for Add Memo -->
<div class="modal fade" id="addMemoModal" tabindex="-1" role="dialog" aria-labelledby="addMemoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMemoModalLabel">Add Memo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="memo_action.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date In</label>
                                <input type="date" name="date_in" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" name="from" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Document Type</label>
                                <input type="text" name="document_type" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ref No</label>
                                <input type="text" name="ref_no" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>UADLIFU No</label>
                                <input type="text" name="uadlifu_no" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Sender Comment</label>
                        <textarea name="sender_comment" class="form-control" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Action Officer</label>
                                <input type="text" name="action_officer" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Out</label>
                                <input type="date" name="date_out" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" name="to" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Receiver Comment</label>
                                <textarea name="receiver_comment" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
            <label for="memo_file">Upload Memo</label>
            <input type="file" name="memo_file" id="memo_file" class="form-control" accept=".pdf, .docx, .jpg, .jpeg, .png" required>
        </div>

        <!-- File Preview Section -->
        <div id="file-preview-container" class="form-group" style="display: none;">
            <label>File Preview:</label>
            <div id="file-preview"></div>
        </div>

        <button type="submit" class="btn btn-success btn-block">Submit Memo</button>
    </form>
</div>

<script>
// JavaScript for file preview
document.getElementById('memo_file').addEventListener('change', function(event) {
    var fileInput = event.target;
    var previewContainer = document.getElementById('file-preview-container');
    var previewElement = document.getElementById('file-preview');

    // Clear previous preview
    previewElement.innerHTML = '';

    var file = fileInput.files[0];

    if (file) {
        previewContainer.style.display = 'block';  // Show the preview section

        // If it's an image, display the image preview
        if (file.type.startsWith('image/')) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100%';
                img.style.height = 'auto';
                previewElement.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
        // If it's a PDF, show a PDF preview link
        else if (file.type === 'application/pdf') {
            var pdfPreview = document.createElement('a');
            pdfPreview.href = URL.createObjectURL(file);
            pdfPreview.target = '_blank';
            pdfPreview.textContent = 'Click here to preview the PDF';
            previewElement.appendChild(pdfPreview);
        }
    } else {
        previewContainer.style.display = 'none';  // Hide the preview section if no file is selected
    }
});
</script>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Displaying Memos -->
<div class="container">
    <div class="dashboard-container">
        <h2>All Memos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Date In</th>
                    <th>From</th>
                    <th>Document Type</th>
                    <th>Subject</th>
                    <th>Action Officer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="memo-list">
                <!-- Memos will be displayed here using JavaScript -->
            </tbody>
        </table>
    </div>
</div>

<!-- Footer -->
<footer class="footer mt-5 py-3 bg-light">
    <div class="container text-center">
        <span>&copy; 2024 Memo Dashboard. All rights reserved.</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.getElementById("search-form").addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent form from submitting normally

    var serialNo = document.getElementById("serial_no").value;

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "search_results.php?serial_no=" + serialNo, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var resultBox = document.getElementById("floatingResultBox");
            var resultContent = document.getElementById("resultContent");

            // Display the result in the floating box
            resultContent.innerHTML = xhr.responseText;
            resultBox.style.display = "block";
        }
    };
    xhr.send();
});

function closeResultBox() {
    document.getElementById("floatingResultBox").style.display = "none";
}
</script>

</body>
</html>
