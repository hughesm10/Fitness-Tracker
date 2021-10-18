<template>
    <!--start navbar-->
    <div class="topnav">
        <a href="index.html"><img src="https://img.icons8.com/color/96/000000/strength.png" style="width: 60px;"></a>  <!--homepage logo-->
        <a href="dashboard.html"><img src="https://img.icons8.com/material/96/ffffff/dashboard-layout.png" style="width: 60px;"></a>  <!--dashboard tab image-->
        <a href="socialfeed.html"><img src="https://img.icons8.com/ios-filled/100/ffffff/conference-call.png" style="width: 60px;"></a>  <!--social tab image-->
        <div class="topnav-right">
            <a><input type="button" class="signup-button" value="Sign Up" onclick="location.href='signup.html';"></a>
            <a><input type="button" class="login-button" value="Login" onclick="location.href='login.html';"></a>
            <a href="profile.html"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/user--v1.png" style="width: 60px;"></a>  <!--profile tab image-->
            <a href="settings.html"><img src="https://img.icons8.com/ios-filled/50/ffffff/settings.png" style="width: 56px;"></a>  <!--settings tab image-->
        </div>
    </div>
    <!--end navbar-->
</template>

<script>
import LoginBadge from './LoginBadge';
export default {
    data(){
        return {
            isActive: false
        }
    },
    components: {
        LoginBadge,
    }
}
</script>

<style>
</style>