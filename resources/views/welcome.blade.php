<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body style="margin: 0;">
<section style="width: 100vw;background-color: black; display: flex;justify-content: space-between;">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" height="4em"  viewBox="0 0 576 512" style="margin-left: 15px;">
            <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H96V32H64zm64 0V480H448V32H128zM512 480c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H480V480h32zM256 176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H320v48c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V288H208c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16h48V176z" fill="red" />
         </svg>
    </div>
    
    <div style=" margin: auto 10px;">
      <ul style="color: white;list-style: none;height: 100%;margin: 0;">
        <li style="float: left;margin-right: 10px;"><a href="{{ url('/home') }}" style="color:white">Home</a> </li>
        <li  style="float: left;margin-right: 10px;"><a href="{{ url('/donate') }}" style="color:white">Donate</a></li>
        <li  style="float: left;margin-right: 10px;"><a href="{{ url('/donors') }}" style="color:white">Find Donors</a></li>
        <li  style="float: left;margin-right: 10px;"><a href="{{ url('/contact') }}" style="color:white">Contact Us</a></li>
      </ul>
    </div>
</section>
<section style="height: 90vh; background: linear-gradient(rgba(126, 24, 24, 0.5), rgba(92, 24, 24, 0.5)), url(https://ichef.bbci.co.uk/news/1024/branded_pidgin/182FF/production/_107317099_blooddonor976.jpg); background-repeat: no-repeat; background-position: center; background-size: cover; display: flex; justify-content: center; align-items: center;">
    <div style="text-align: center; color: white;white-space: normal;
    overflow-wrap: break-word;">
       <h1 style="font-weight: 900;font-size: 6rem;">HELP OTHERS LIVE <br> DONATE BLOOD</h1>
       <div style="display: flex;justify-content: center;">
            <div>
                <button type="button" style="padding: 7px 10px;font-size: 2rem;background-color: rgba(241, 125, 125, 0.644);text-align: center;color: white;font-weight: 750;width: 250px;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="white" d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/></svg>
                    Donate
                </button>
            </div>
            <div style="width: 50px;"></div>
            <div>
                <button type="button" style="padding: 7px 10px;font-size: 2rem;background-color: rgba(241, 125, 125, 0.644);text-align: center;color: white;font-weight: 750;width: 250px;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="white" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    Seek Donor
                </button>
            </div>
       </div>
    </div>
</section>


</body>
</html>