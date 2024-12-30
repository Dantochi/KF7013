<?php
// if the session is set, display logout button
// if not display logout
function makeLoginLogOut(): string
{
    if(isset($_SESSION['email'])){
        return "
<div id='wireframe'>
                <form action='./logout.php' method='post'>
                    <input type='submit' name='buttonName' id='buttonName' value='Logout' style='outline: none; border: none;'/>
                </form>
                </div>
";
    }else{
        return "
<div id='wireframe'>
                <form action='./login.php' method='post'>
                    <input type='submit' name='buttonName' id='buttonName' value='Login' style='outline: none; border: none;'/>
                </form>
</div>
";
    }

}

