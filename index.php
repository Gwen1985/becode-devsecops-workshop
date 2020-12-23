

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BeCode DevSecOps Workshop</title>
    <meta charset="UTF-8"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css"
    />
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
<section class="section ">
    <div class="container">
        <h1 class="is-size-1">JavaScript Quiz</h1>
    </div>
</section>
<section class="section">
    <div class="container" id="quesions">
        <form id="form">
            <div class="field">

                <div class="control">
                    <label class="label">Your name:
                        <input class="input" type="text" name="name"/>
                    </label>
                </div>
            </div>
            <div id="quiz"></div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="section">
    <div class="container" id="results"></div>
</section>

<script src="script.js"></script>
</body>
</html>
