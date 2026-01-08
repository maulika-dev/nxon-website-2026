<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>
        NXON
    </title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="">
    <meta name="author" content="NXON AI">
    <meta name="generator" content="NXON" />
    <meta property="og:site_name" content="NXON" />
    <meta name="description"
        content="NXON Technologies is a group of Solution Team that solves engineering challenges by providing Embedded product development and design services including embedded software development, FPGA / ASIC design & verification and hardware design. We are providing the Product Engineering Solutions and help to businesses elevate their value through custom software development and Embedded product design. We are a team of Embedded , Firmware , Hardware and IoT engineers & project managers supported by a proven methodology for product development that ensures predictable costs & schedules. We deliver breakthrough products in collaboration with Fortune 500 and fast-moving startups.">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    
    @include('layouts.style')
    @yield('style')
</head>

<body>
    <div class="loader" id="loader">
        <div class="loader-circle"></div>
    </div>
    <div id="main-contant">
        @include('layouts.navbar')
        
        @yield('content')
        
        @include('layouts.footer')
        @include('layouts.script')
        @yield('script')
    </div>
</body>

</html>