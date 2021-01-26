<!DOCTYPE html>
<html>
    <head>
        <title>Ccaizhdi Numbers</title>
        <link rel="stylesheet" href="css/ccaizhdi.css">
        <link rel="stylesheet" href="css/gnath.css">
        <style>
            textarea
            {
                font-size: 2em;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .table
            {
                width: 100%;
            }

            tr:nth-child(even)
            {
                background-color: #444444; 
            } 
        </style>
    </head>

    <body>
        <h1>Introduction to Ccaizhdi Numbers</h1>

        <div class='centerbox'>
        Links:
            <ul>
                <li><a href='index.php'>Home</a></li>
            </ul>

            <br><br>
            Ccaizhdi is a base-10 system, similar to the one most people in the West are used to. However, it is NOT the same. There is so symbol for 0, but the Ccaizhdi still can do all their math without their symbol. What tey have is called a bijective number system, which is a way of replaciong 0 with 10. This, however, does change arithmetic some.
            <br><br>
            We are used to equations like: <br>
            &nbsp   155<br>
                +   275<br>
                =   430<br>
            <br>
            Every time a number exceeds 9, we 'carry' the next place over. The Ccaizhdi numbers are the same, with one difference: youcarry when you exceed 10, not 9. For the sake of an example, let A be 10, much like <p class='ccaizhdi'>0</p> is the Ccaizhdi symbol for 10.
            <br><br>
            The above equation becomes:
            &nbsp   155<br>
                +   275<br>
                =   42A<br>
            <br>
            Step-by-step: When adding 7 and 5, you get 10, which is A. Write A in the answer space, and do not carry anyting. when adding 5 and 7, you get 12. Write 2 and carry the 1. when you add 1 and 2, you get 3 and write that down. Thus, 42A.
            <br><br>
            So how does one convert this to the 0-system we are used to? If there are no A's (meaning <p class='ccaizhdi'>0</p>'s) then it is just the same as you are used to. If not, every time you see and A, add one to the nukber in front of it, and replace teh A with a 0. Thus: 42A => 430.
            <br><br>
            Of course, since the Ccaizhdi write top-to-bottom, left-to-right, their equations look a bit different. The same equation written in Ccaizhdi would be:
            <p class='ccaizhdi'>
                &nbsp   155<br>
                +       275<br>
                =       420<br>
            </p>
            <br>
            (Excluse the + and = for the moment; I have yet to create Ccaizhdi symbols for those). Below, I have included a breakdown of how to type these, as well as given a text box to play around with the Ccaizhdi numbers. Have fun!

            <br><br>

            <table>
                <tr>
                    <th>Keyboard &emsp;</th>
                    <th>Numeric Value &emsp;</th>
                    <th>Symbol &emsp;</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td class='ccaizhdi'>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td class='ccaizhdi'>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>3</td>
                    <td class='ccaizhdi'>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>4</td>
                    <td class='ccaizhdi'>4</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>5</td>
                    <td class='ccaizhdi'>5</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>6</td>
                    <td class='ccaizhdi'>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>7</td>
                    <td class='ccaizhdi'>7</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>8</td>
                    <td class='ccaizhdi'>8</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>9</td>
                    <td class='ccaizhdi'>9</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>10</td>
                    <td class='ccaizhdi'>0</td>
                </tr>
            </table>

            <br><br>
            Go ahead and use the text box below to type some Ccaizhdi numbers!
        </div>

        <textarea class="ccaizhdi" rows="30" cols="25"></textarea>

    </body>
</html>
