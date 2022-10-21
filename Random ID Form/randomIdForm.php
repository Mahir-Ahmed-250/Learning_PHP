<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="id.php" method="post">
	<h1>Create Your Virtual ID Card</h1>
    <!-- Name Field -->
    <div class="form-field">
    <label for="field" class="label-required">Name</label>
    <section>
        <input id="field" name="student_name" required type="text" placeholder="Your Name"/>
    </section>
    </div>

    <!-- Phone Field -->
    <div class="form-field">
    <label for="field" class="label-required">Phone</label>
    <section>
        <input id="phone" name="student_phone" required type="tel" placeholder="Your Phone no"/>
    </section>
    </div>

    <!-- Email Field -->
    <div class="form-field">
    <label for="field" class="label-required">Email</label>
    <section>
        <input id="email" name="student_email" required type="tel" placeholder="Your Email"/>
    </section>
    </div>
   
    <!-- Course Field -->
    <div class="form-field">
    <label for="field" class="label-required">Course</label>
    <section>
        <input id="text" name="student_course" required type="tel" placeholder="Name of your Course"/>
    </section>
    </div>

     <!-- Course Field -->
    <div class="form-field">
    <label for="field" class="label-required">Batch</label>
    <section>
        <input id="text" name="student_Batch" required type="tel" placeholder="Name of your Batch"/>
    </section>
    </div>
    <!-- Button -->

    <div class="form-buttons">
        <button type="submit" name="generate-btn" class="a-btn-filled">Generate ID</button>
    </div>

    </form>

</body>
</html>