<template>
    <div v-show="displayLogin" id="login" class="shadow">
        <div id="login-content">
            <div id="login-header" class="p-4 flex justify-end items-center">
                <span @click="closeCart()" class="cursor-pointer">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.6276 10.7996L20.6976 3.72764C20.8887 3.54315 21.041 3.32246 21.1458 3.07845C21.2507 2.83444 21.3058 2.572 21.3081 2.30644C21.3104 2.04088 21.2598 1.77752 21.1593 1.53173C21.0587 1.28594 20.9102 1.06263 20.7224 0.874849C20.5346 0.687064 20.3113 0.538557 20.0655 0.437996C19.8198 0.337434 19.5564 0.28683 19.2908 0.289138C19.0253 0.291446 18.7628 0.346618 18.5188 0.451436C18.2748 0.556254 18.0541 0.708619 17.8696 0.899639L10.7976 7.96964L3.72764 0.899639C3.54315 0.708619 3.32246 0.556254 3.07845 0.451436C2.83444 0.346618 2.572 0.291446 2.30644 0.289138C2.04088 0.28683 1.77752 0.337434 1.53173 0.437996C1.28594 0.538557 1.06263 0.687064 0.874849 0.874849C0.687064 1.06263 0.538557 1.28594 0.437996 1.53173C0.337434 1.77752 0.28683 2.04088 0.289138 2.30644C0.291446 2.572 0.346618 2.83444 0.451436 3.07845C0.556254 3.32246 0.708619 3.54315 0.899639 3.72764L7.96964 10.7976L0.899639 17.8696C0.708619 18.0541 0.556254 18.2748 0.451436 18.5188C0.346618 18.7628 0.291446 19.0253 0.289138 19.2908C0.28683 19.5564 0.337434 19.8198 0.437996 20.0655C0.538557 20.3113 0.687064 20.5346 0.874849 20.7224C1.06263 20.9102 1.28594 21.0587 1.53173 21.1593C1.77752 21.2598 2.04088 21.3104 2.30644 21.3081C2.572 21.3058 2.83444 21.2507 3.07845 21.1458C3.32246 21.041 3.54315 20.8887 3.72764 20.6976L10.7976 13.6276L17.8696 20.6976C18.0541 20.8887 18.2748 21.041 18.5188 21.1458C18.7628 21.2507 19.0253 21.3058 19.2908 21.3081C19.5564 21.3104 19.8198 21.2598 20.0655 21.1593C20.3113 21.0587 20.5346 20.9102 20.7224 20.7224C20.9102 20.5346 21.0587 20.3113 21.1593 20.0655C21.2598 19.8198 21.3104 19.5564 21.3081 19.2908C21.3058 19.0253 21.2507 18.7628 21.1458 18.5188C21.041 18.2748 20.8887 18.0541 20.6976 17.8696L13.6276 10.7976V10.7996Z" fill="white"/></svg>
                </span> 
            </div>
            <div id="login-body" class="py-6 text-center px-4 md:px-16">
                <div>
                    <svg class="mx-auto" width="37" height="43" viewBox="0 0 37 43" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.9105 40.487C32.1742 40.487 33.9928 38.6489 33.9928 36.4046C33.9928 34.1603 32.1548 32.3223 29.9105 32.3223C27.6468 32.3223 25.8281 34.1603 25.8281 36.4046C25.8281 38.6489 27.6468 40.487 29.9105 40.487Z" fill="#F37022"/><path d="M11.8011 42.3825C14.0648 42.3825 15.8835 40.5444 15.8835 38.3001C15.8835 36.0364 14.0454 34.2178 11.8011 34.2178C9.55678 34.2178 7.71875 36.0558 7.71875 38.3001C7.71875 40.5444 9.55678 42.3825 11.8011 42.3825Z" fill="#F37022"/><path d="M30.0082 30.988L9.22883 33.1742C5.08843 33.5999 1.39303 30.601 0.948035 26.48L0 17.522L35.7545 13.7686L36.7025 22.7265C37.1668 26.8669 34.1486 30.5623 30.0082 30.988Z" fill="#F37022"/><path d="M5.30474 13.5548C4.64692 6.84119 9.59991 0.766028 16.3135 0.0695131C23.0272 -0.64635 29.1217 4.2486 29.8762 10.9816L25.6004 11.4459C25.1167 7.05401 21.1311 3.86165 16.7392 4.34534C12.3473 4.80968 9.11622 8.7566 9.54187 13.1485L5.30474 13.5548Z" fill="#F37022"/></svg>
                </div>
                <div class="mt-4">
                    {{ callback }}
                </div>
                <div v-if="isLoading" class="loader mx-auto"></div>
                <!-- Login Form  -->
                <div v-show="displayLoginForm">
                    <div class="my-4">
                        Log in into your account
                    </div>
                    <div class="my-4">
                        <div>
                            <input required v-model="loginEmail" class="input-box" type="email" name="email" id="loginEmail" placeholder="Email Address">
                        </div>
                        <div>
                            <input @keydown.enter="loginUser()" required v-model="loginPassword" class="input-box" type="password" name="password" id="loginPassword" placeholder="Password">
                        </div>
                    </div>
                    <div @click="showForgotPasswordForm()" class="cursor-pointer flex justify-end my-4">
                        Forgot Password?
                    </div>
                    <div class="text-left my-4">
                        <span>
                            <input type="checkbox" name="signed">
                        </span>
                        <span>
                            Keep me signed in
                        </span>
                    </div>
                    <div @click="loginUser()" class="my-8">
                        <button class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                            Login
                        </button>
                    </div>
                    <div @click="showSignUpForm()" class="my-4 cursor-pointer">
                        Do not have an account?
                    </div>
                    <div @click="showSignUpForm()" class="my-8">
                        <button class="mx-auto btn-yus-conti-shopping rounded-full w-full py-3 text-black">
                            Create account
                        </button>
                    </div>
                </div>
                <!-- Signup Form  -->
                <div v-show="displaySignUpForm">
                    <div class="my-4">
                        Welcome! Create an account
                    </div>
                    <div class="my-4">
                        <div>
                            <input required v-model="signUpName" class="input-box" type="text" name="name" id="signUpName" placeholder="Full Name">
                        </div>
                        <div>
                            <input required v-model="signUpEmail" class="input-box" type="email" name="email" id="signUpEmail" placeholder="Email Address">
                        </div>
                        <div>
                            <input required v-model="signUpPassword" class="input-box" type="password" name="password" id="signUpPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="text-left my-4">
                        <span>
                            <input type="checkbox" name="signed">
                        </span>
                        <span>
                            Keep me signed in
                        </span>
                    </div>
                    <div class="my-8">
                        <button @keydown.enter="registerUser()" @click="registerUser()" class="mx-auto btn-yus rounded-full w-full py-3 text-white">
                            Create account
                        </button>
                    </div>
                    <div @click="showLoginForm()" class="my-4 cursor-pointer">
                        Already have an account?
                    </div>
                    <div @click="showLoginForm()" class="my-8">
                        <button class="mx-auto btn-yus-conti-shopping rounded-full w-full py-2 text-black">
                            Login
                        </button>
                    </div>
                </div>
                <!-- Forgot Password Form  -->
                <div v-show="displayForgotPasswordForm">
                    <div class="my-8">
                        Enter the email address your register your account. We will send you a verification link to reset your account.
                    </div>
                    <div class="my-4">
                        <div>
                            <input required v-model="forgotPasswordEmail" class="input-box" type="text" name="forgotPasswordEmail" id="ForgotPasswordEmail" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="my-8">
                        <button @click="forgotPassword()" class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                            Submit
                        </button>
                    </div>
                    <div @click="showLoginForm()" class="my-4 cursor-pointer">
                        <span>Remember your password?</span>
                        <span class="ml-2">Sign in</span>
                    </div>
                </div>
                <!-- Verify Email Form  -->
                <div v-show="displayVerifyEmailForm">
                    <div class="my-8">
                        Enter your Verification Code sent to your Email
                    </div>
                    <div class="my-4">
                        <div>
                            <input required v-model="verificationCode" class="input-box" type="text" name="verificationCode" id="verificationCode" placeholder="Enter your Verification Code">
                        </div>
                    </div>
                    <div class="my-8">
                        <button @click="verifyCode()" class="mx-auto btn-yus rounded-full w-full py-2 text-white">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'LoginComponent',
    data(){
        return{
            displayLogin: true,
            displayLoginForm: true,
            displaySignUpForm: false,
            displayForgotPasswordForm: false,
            displayVerifyEmailForm: false,
            loginEmail: '',
            loginPassword: '',
            signUpName: '',
            signUpEmail: '',
            signUpPassword: '',
            forgotPasswordEmail: '',
            verificationCode: '',
            callback: '',
            isLoading: false
        }
    },
    methods:{
        closeCart(){
            if(this.displayLogin == true){
                this.displayLogin = false
            }else{
                this.displayLogin = true
            }
        },
        showLoginForm(){
            this.displayLoginForm = true 
            this.displaySignUpForm = false
            this.displayForgotPasswordForm = false
            this.displayVerifyEmailForm = false
        },
        showSignUpForm(){
            this.displaySignUpForm = true 
            this.displayLoginForm = false 
            this.displayForgotPasswordForm = false
            this.displayVerifyEmailForm = false
        },
        showForgotPasswordForm(){
            this.displayForgotPasswordForm = true 
            this.displayLoginForm = false
            this.displaySignUpForm = false
            this.displayVerifyEmailForm = false
        },
        async loginUser(){
            
            this.isLoading = true 

            if(this.loginEmail !== ''){
                if(this.loginPassword !== ''){
                    axios.post('/login', {
                        email: this.loginEmail,
                        password: this.loginPassword
                    }).then(response => {
                        this.loginEmail = '',
                        this.loginPassword = '',

                        this.isLoading = false

                        this.callback = response.data

                        setTimeout(()=>{
                            window.location = '/'
                        }, 3000)

                    }).catch(error => {
                        console.log(error)
                    })
                }else{
                    this.callback = 'Password field empty'
                }
            }else{
                this.callback = 'Email Address field empty'
            }
        },
        async registerUser(){
            this.isLoading = true 
            if(this.signUpName !== ''){
                if(this.signUpEmail !== ''){
                    if(this.signUpPassword !== ''){
                        axios.post('/register', {
                            name: this.signUpName,
                            email: this.signUpEmail,
                            password: this.signUpPassword
                        }).then(response => {
                            this.signUpName = '',
                            this.signUpEmail = '',
                            this.signUpPassword = '',

                            this.isLoading = false
                            this.callback = response.data

                            if(this.callback[0] == 'The email has already been taken.'){
                                this.callback = 'The email address has already been taken'
                            }

                            if(this.callback[0] == 'The password must be at least 8 characters'){
                                this.callback = 'The password must be at least 8 characters'
                            }

                            if(this.callback[0] == 'The password must not be greater than 16 characters'){
                                this.callback = 'The password must not be greater than 16 characters'
                            }

                            if(this.callback == 'You need to verify your account'){
                                this.callback = ''
                                this.displayVerifyEmailForm = true
                                this.displayForgotPasswordForm = false 
                                this.displayLoginForm = false
                                this.displaySignUpForm = false
                            }

                        }).catch(error => {
                            console.log(error)
                        })
                    }else{
                        this.isLoading = false
                        this.callback = 'Password field empty'
                    }
                }else{
                    this.isLoading = false
                    this.callback = 'Email field empty'
                }
            }else{
                this.isLoading = false
                this.callback = 'Name field empty'
            }
        },
        async forgotPassword(){
            this.isLoading = true
            
            if(this.forgotPasswordEmail != ''){
                axios.post('/forgot', {
                    email: this.forgotPasswordEmail,
                }).then(response => {
                    this.forgotPasswordEmail = '',

                    this.isLoading = false
                    this.callback = response.data

                    setTimeout(()=>{
                        window.location = '/'
                    }, 3000)

                }).catch(error => {
                    console.log(error)
                })
            }else{
                this.callback = 'Email Address field empty'
            }
        },
        async verifyCode(){
            this.isLoading = true
            
            if(this.verificationCode != ''){
                axios.post('/register/verify', {
                    verification_link: this.verificationCode,
                }).then(response => {
                    this.verificationCode = '',

                    this.isLoading = false
                    this.callback = response.data

                    if(this.callback == 'Your Email has been Verified Successfully'){
                        this.displayVerifyEmailForm = false
                        this.displayForgotPasswordForm = false 
                        this.displayLoginForm = false
                        this.displaySignUpForm = false

                        setTimeout(()=>{
                            window.location = '/'
                        }, 3000)
                    }

                }).catch(error => {
                    console.log(error)
                })
            }else{
                this.callback = 'Email Address field empty'
            }
        }
    }
}
</script>