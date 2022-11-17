
 <!-- header -->
    <?php include 'header.php';?>
<!-- header close -->

<style>

.page{
width: 100%;
height:auto;
min-height:100vh;
/* background-color:#ede7e6; */
background-size: 100% 100%;
background-position: top center;
padding:10px;
margin:30px 0px;
}

.signintext{
margin-right:20%!important;
color:#969799;

}

.top{
color: #1E144F;
}

.btn{
width: 30%;
margin-top:5%;
margin-bottom: 5%;
margin-left: 25%;

}

.ForgotPassBtn{
background-color:white; 
color:black;
border-bottom: 1px solid #c7c5c5;
padding-bottom: 3px;
text-decoration: none!important;
margin-right: 20%;
border-top-color: none;

}
.LoginBtn{
  border-radius: 25px;
  background-image:url(http://i.imgur.com/S4zmPRw.png);
  border:none;
}



.signupbtn{
border-radius: 25px;
width: 25%;
margin:auto;
background-image:url(http://i.imgur.com/S4zmPRw.png);
border:solid 1px white;
font-size: 10px;
}

form{
padding: 0;
margin-left: 15%;
}

.signin{
background-color: #ecf5f9;
padding: 2%;
margin: auto;
}

.signup{
padding: 2%;
background: #0892d0;
}
.form-control{
width: 80%;
margin-bottom: 5%;
    margin-top: 5%;
    background-color: #ebe8e8;

}

.custom-control{
margin-bottom: 2%;
} 

h2.HelloFriend{
color:#fff !important;
font-weight:200px;
margin-top:30%;
margin-bottom:10%;
}

.SignupText{
color:#fff;
margin-bottom:15%;
font-size:16px;
font-weight: 10px!important;
font-family: Garamond;
}

@media only screen and (max-width: 600px) {
row{


    margin-top: 5%;
    margin-left: 1%;
    margin-right: 1%;
}    }

input, input:focus{
    border-width: 0px;
    outline:0; 
    -webkit-appearance:none;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
}


.social-btn .btn {
    color: #fff;
    margin: 8px 0 0 30px;
    font-size: 15px;
   width: 45px;
height: 40px;
line-height: 25px;
    border-radius: 50%;
    font-weight: normal;
    text-align: center;
    border: solid 0.5px grey;
    transition: all 0.4s;
}	
.social-btn .btn:first-child {
    margin-left: 0;
}
.social-btn .btn:hover {
    opacity: 0.8;
}

.social-btn .btn i {
    font-size: 20px;
}

.social-btn{
margin-right: 20%;
margin-bottom: 7%;
margin-top: 5%;
}
button.btn.btn-info.btn-block.LoginBtn.st {
    background: #0892d0;
    color: #ffff;
    padding: 10px 10px;
}
button.btn.btn-info.btn-block.signupbtn.st-1 {
    background: #fff8f3;
    border: #000;
    color: #0892d0;
    padding: 8px 8px;
    font-size: 13px;
}
</style>


        <div class="container">
            <div class="page mt-10">
                <!--Login & Signup in single row-->
                <div class="row">
                
                
                <!--Column for signin-->
                <div class="col-sm-8 text-center signin">
                
                
                    <!-- Default form login -->
                    <form action="#!">
                    <p class="h4 mb-4 text-center signintext top"><strong>Sign in to HospitalMitra</strong></p>
                
                <!--Login with Social Media Buttons-->
                <div class="social-btn text-center">
                    <!-- <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn btn-danger btn-lg" title="Pinterest"><i class="fa fa-pinterest"></i></a> -->
                    </div>
                
                    <p class="text-center signintext">Or use your Email account</p>
                
                    <!-- Email -->
                    <input type="email" class="form-control mb-4"  placeholder="&#xf0e0; Email" style="font-family:Arial, FontAwesome">
                
                    <!-- Password -->
                    <input type="password" class="form-control mb-4" placeholder="&#xf023;  Password" style="font-family:Arial, FontAwesome">
                    <!-- Sign in button -->
                            <a class="ForgotPassBtn" href="" >Forgot Your Password?</a>
                    <button class="btn btn-info btn-block LoginBtn st" type="submit" >SIGN IN</button>
            
                    </form>
                
                </div>
                
                <!--Column for signin-->
                <div class="col-sm-4 signup text-center">
                    <h2 class="HelloFriend">Welcome !</h2>
                    <h4 class="SignupText">Enter your personal details<br>and start journey with us</h4>
                    <button class="btn btn-info btn-block signupbtn st-1" type="submit">SIGN UP</button>
                
                </div>
                </div>
                </div>
            </div>
        </div>
    <!-- end of page-wrapper -->
    


   <!-- header -->
   <?php include 'footer.php';?>
   <!-- header close -->