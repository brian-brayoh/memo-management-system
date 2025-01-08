<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Memo</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e6f7ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #1a73e8;
            margin-bottom: 20px;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input, textarea {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            width: 48%;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }

        input:focus, textarea:focus {
            border-color: #1a73e8;
            outline: none;
        }

        textarea {
            width: 100%;
            height: 120px;
        }

        button {
            padding: 12px;
            background-color: #1a73e8;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #0c5b96;
        }

        .success {
            color: #28a745;
            font-weight: bold;
            text-align: center;
        }

        .error {
            color: #dc3545;
            font-weight: bold;
            text-align: center;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            width: 100%;
        }

        .form-row div {
            width: 48%;
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            button {
                font-size: 14px;
            }

            input, textarea {
                font-size: 13px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Memo</h1>
        <form action="add_memo.php" method="POST">
            <div class="form-row">
                <div>
                    <label for="date_in">Date In:</label>
                    <input type="date" id="date_in" name="date_in" required>
                </div>
                
                <div>
                    <label for="from_field">From:</label>
                    <input type="text" id="from_field" name="from_field" required>
                </div>
            </div>
            
            <div class="form-row">
                <div>
                    <label for="document_type">Document Type:</label>
                    <input type="text" id="document_type" name="document_type" required>
                </div>

                <div>
                    <label for="ref_no">Ref No:</label>
                    <input type="text" id="ref_no" name="ref_no" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="udailifu_no">Uadilifu No:</label>
                    <input type="text" id="udailifu_no" name="udailifu_no" required>
                </div>

                <div>
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="sender_comment">Sender Comments:</label>
                    <textarea id="sender_comment" name="sender_comment" rows="4" required></textarea>
                </div>

                <div>
                    <label for="action_officer">Action Officer:</label>
                    <input type="text" id="action_officer" name="action_officer" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="date_out">Date Out:</label>
                    <input type="date" id="date_out" name="date_out">
                </div>

                <div>
                    <label for="to_field">To:</label>
                    <input type="text" id="to_field" name="to_field" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="receiver_comment">Receiver Comments:</label>
                    <textarea id="receiver_comment" name="receiver_comment" rows="4"></textarea>
                </div>
            </div>

            <button type="submit">Add Memo</button>
        </form>
    </div>

<?php include('footer.php'); ?>

</body>
</html>
