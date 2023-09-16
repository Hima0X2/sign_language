<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body class=' flex justify-center bg-slate-200'>
<div class="rounded-xl  mt-5 flex sm:mx-auto sm:w-full sm:max-w-sm lg:w-2/4 min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-slate-900">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class=" text-center text-xl font-bold leading-9 tracking-tight text-white">Please enter OTP to get verified.</h2>
  </div>

  <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="CodeOTP.php" method="POST">
      <div>
        <label for="otp" class="block text-sm font-medium leading-6 text-white">OTP</label>
        <div class="mt-2">
          <input id="otp" name="otp" type="text"  required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
        </div>
       <?php
       session_start();
        if(isset($_SESSION['status'])){
          if ($_SESSION['status'] == 'OTP sent successfully') {
            echo "<script>
               alert('OTP sent successfully,enter OTP to get verified.');
               </script>";
          unset($_SESSION['status']); 
               
          }
          if(isset($_SESSION['status'])){
        echo '<span class="text-red-700">' .$_SESSION['status']. '</span>';
        unset($_SESSION['status']); 

          }
           
      }
  

    ?>
      </div>
    
      <div>
        <button type="submit" name="submit_otp_btn" class="flex w-full justify-center rounded-3xl bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
       
      </div>
    <hr>
   <div class="text-center">
   <a href="ResendOTP.php" class="font-semibold text-sm  leading-6 text-indigo-600 hover:text-indigo-500">Resend OTP</a>
   </div>
 
    </form>
    
  </div>

</div>

</body>
</html>