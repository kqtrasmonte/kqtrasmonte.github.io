<html>

<head>
    <title>MyKirby</title>
</head>

<style>
    * {
        box-sizing: border-box;
        font-family: Helvetica, Arial, sans-serif;
    }

    body {
        margin: 0;
        background-color: #e9ebee;
    }

    #bar {
        height: 100px;
        background-color: rgb(59,89,152);
        color: #d9dfeb;
        padding: 20px 25px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #signup_button {
        background-color: #42b72a;
        width: 70px;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
        float:right;
        color: #fff;
        cursor: pointer;
        font-weight: bold;
        font-size: 14px;
    }

    #login_container {
        display: flex;
        justify-content: center;
        padding: 40px 20px;
    }

    #login_card {
        background-color: #fff;
        border: 1px solid #dddfe2;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.15);
        width: 100%;
        max-width: 500px;
        padding: 40px;
        text-align: center;
    }

    #login_card h1 {
        font-size: 22px;
        font-weight: 500;
        color: #1c1e21;
        margin-bottom: 20px;
    }

    #login_card input[type="text"],
    #login_card input[type="password"] {
        width: 100%;
        padding: 14px 16px;
        margin-bottom: 12px;
        font-size: 17px;
        border: 1px solid #ccd0d5;
        border-radius: 6px;
    }

    #login_btn {
        width: 100%;
        background-color: rgb(59,89,152);
        color: #fff;
        border: none;
        padding: 14px 0;
        font-size: 20px;
        font-weight: bold;
        border-radius: 6px;
        cursor: pointer;
        margin-bottom: 16px;
    }

    #login_links {
        font-size: 14px;
    }

    #login_links a {
        color: #385898;
        text-decoration: none;
    }

    #login_links a:hover {
        text-decoration: underline;
    }

    .divider {
        color: #ccc;
        margin: 0 6px;
    }
</style>

<body>

    <div id="bar">

        <div style="font-size: 40px;">MyKirby</div>

        <div id="signup_button">Signup</div>

    </div>

    <div id="login_container">
        <div id="login_card">
            <h1>Log in BAI</h1>
            <form onsubmit="return false;">
                <input type="text" placeholder="Email address or phone number">
                <input type="password" placeholder="Password">
                <button type="submit" id="login_btn">Log In</button>
            </form>
            <div id="login_links">
                <a href="#">Forgotten account?</a>
                <span class="divider">·</span>
                <a href="#">Sign up for Mybook</a>
            </div>
        </div>
    </div>

</body>

</html>