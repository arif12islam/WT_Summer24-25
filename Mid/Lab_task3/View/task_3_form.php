<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="../CSS/task_3_style.css">
    <script src="../JS/task_3_valid.js" defer></script>
</head>
<body>
    <form class="main-form" onsubmit="return submitForm()">
        <div class="parent-card">
            <h1>Donor Information</h1>
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" required>
                    <option value="">--Select--</option>
                    <option value="State1">Dhaka</option>
                    <option value="State2">Chattogram</option>
                    <option value="State3">Khulna</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <label for="donation-amount">Donation Amount</label>
            <div class="form-radio">
                
                <input type="radio" id="donation-amount" name="donation-amount" required>
                <label>None</label>
                <input type="radio" id="donation-amount" name="donation-amount" required>
                <label>500 BDT</label>
                <input type="radio" id="donation-amount" name="donation-amount" required>
                <label>1000 BDT</label>
                <input type="radio" id="donation-amount" name="donation-amount" required>
                <label>2000 BDT</label>
                <input type="radio" id="donation-amount" name="donation-amount" required>
                <label>300 BDT</label>
                <input type="radio" id="donation-amount" name="donation-amount" required>
                <label>Other</label>
            </div>
            <div class="form-group">
                <label for="other-amount">Other Amount</label>
                <input type="text" id="other-amount" name="other-amount">
            </div>
            <div class="checkbox-group">
                <input type="checkbox" class="checkbox">
                <label>I am interested in giving on a regular basis.</label>
                <h1>Additional Information</h1>
                <input type="checkbox" class="checkbox">
                <label>I would like my gift to remain anonymous.</label><br>
                <input type="checkbox" class="checkbox">
                <label>My employer offers a matching gift program.</label><br>
                <input type="checkbox" class="checkbox">
                <label>Please don't send a thank you letter.</label>
            </div>
            <div class="form-comment">
                <label for="comments" id="comment">Comments</label><br>
                <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
            </div>
            <div class="form-btn">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </div>
    </form>
</body>
</html>