<div style='width: 80%; margin:0px auto; border:2px solid #eee; text-align:left; padding: 2% 4%; line-height: 1.6;'>
    <div style='padding-bottom:1%;'>
        <center><img style='width:20%;' src='https://kahioja.com/assets/images/1597338993KAHIOJA.png' alt='Kahioja Image'></center>
    </div>
    <div style='border-top:2px solid #df7f1b; padding-bottom:1%;'>
        <center><img style='width:35%;' src='https://kahioja.com/assets/images/thank-you.jpg' alt='Kahioja Image'></center>
    </div>
    <div>
        Thanks for signing up, {{ $request->name }},
    </div>
    <div>
        <p>
            Please verify your email to get access to thousands of products to <b>"Buy and Sell."</b> <br>
            <center>
                <button style='margin-top: 2%; background-color:orange; border:none; padding: 2% 5%; border-radius:25px;'>
                    <a style='text-decoration:none; color:#fff; font-size: 1.2rem;' href=".url('user/register/verify/{{md5(time().$request->name.$request->email)}}">
                        Verify Email now
                    </a>
                </button>
        </center>
        </p>
        <p>
            Or <br> <a target='_blank' style='font-size: 1.5rem;' href=".url('user/register/verify/{{md5(time().$request->name.$request->email)}}">Click on this link to verify your email address</a>
        </p>
    </div>
    <div>
        Your KAHIOJA Team
    </div>
    <div style='border-top:2px solid #000; margin-top:1%; padding:2%;'>
        <center><img style='width:15%;' src='https://kahioja.com/assets/images/1597338993KAHIOJA.png' alt='Kahioja Image'></center>
    </div>
    <div style='text-align:center; font-size:11px; line-height:1.3;'>
        A1/A2 Block A Hamisu Abba Sumaila Plaza Tarauni Kano, Nigeria | <a style='color:#df7f1b;'>info@kahioja.com</a><br>
        You've received this email because you have an account with KAHIOJA.
    </div>
</div>