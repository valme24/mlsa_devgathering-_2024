<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style>
        #navbar {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #f1f1f1;
        }


        #navbar a {
            text-decoration: none;
            color: black;
            padding: 10px;
        }
        

        #profile_icon {
            width: 30px;
            height: 30px;
        }



        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            opacity: 0.8;
            width: 280px;
        }



        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: absolute;
            background-color: white;
            border: 3px solid #f1f1f1;
            z-index: 9;
            width: 280px;
        }
      

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }


        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }



      

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }







.blocks{
    background-color: #f1f1f1;
    width: 25%;
    height: 25%;
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
    display: inline-block;
    text-align: center;
    border-radius: 10px;
}
.blocks:hover{
    background-color: #f1f1f1;
    width: 30%;
    height: 30%;
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
    display: inline-block;
    text-align: center;
    border-radius: 10px;
    box-shadow: 5px 5px 5px 5px #888888;
}


    </style>
</head>

<body>

    <div id="navbar">
        <a href="form.php">login</a>
        <a href="signup.php">Sign Up</a>
        <button class="open-button" onclick="openForm()"><img src="profile.png" style="height:20px"></button>
        <div class="form-popup" id="myForm">
            <div>remaining credits</div>
            <div>subscrptions</div>
            <div>logout</div>

        </div>

    </div>

    <script>
        function openForm() {
            var form = document.getElementById("myForm");
            if (form.style.display === "block") {
                form.style.display = "none";
            } else {
                form.style.display = "block";
            }
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }

    </script>




<div id="block1" class="blocks">
    <h3 >buy in amazon prime</h3>
    <p>watch the latest movies and tv shows</p>
    <label> price</label>

    <button> <a href="list.html">buy</a></button>
    

    </div>



    <div id="block2" class="blocks">
    <h3 >buy in netflix</h3>
    <p>watch the latest movies and tv shows</p>
    <label> price : 5 credits</label>

    <button> <a href="list.html">buy</a></button>
    

    </div>
    
    <div id="block3" class="blocks">
    <h3 >buy in flipcart plus</h3>
    <p>buy quality products</p>
    <label> price : 5 credits</label>

    <button> <a href="list.html">buy</a></button>
    

    </div>

    <div id="block4" class="blocks">
    <h3 >buy in zomato plus</h3>
    <p>tasty food </p>
    <label> price : 5 credits</label>

    <button> <a href="list.html">buy</a></button>
    

    </div>

    <div id="block5" class="blocks">
    <h3 >buy in svvigy plus</h3>
    <p>tasty food </p>
    <label> price : 5 credits</label>

    <button> <a href="list.html">buy</a></button>
    

    </div>


    <div id="block6" class="blocks">
    <h3 >buy in desney+hotstar plus</h3>
    <p>full entertainment</p>
    <label> price : 5 credits</label>

    <button> <a href="list.html">buy</a></button>
    

    </div>

    <div id="block6" class="blocks">
    <h3 >spotify premium</h3>
    <p>listen music  </p>
    <label> price : 5 credits</label>

    <button> <a href="list.html">buy</a></button>
    </div>


</body>




</html>
