<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="form">
    <h1>Formularz kontaktowy</h1>
    <form method="post" action="mailto:yourmail@mail.com" name="ContactForm" onsubmit="return ValidateContactForm();" novalidate>
        <input class="form_name" type="text" name="Name" placeholder="Imię i Nazwisko"><br>
        <input class="form_section" type="text" name="Email" placeholder="E-mail">
        <input class="form_section" type="text" id="pesel" name="Pesel" maxlength="11" placeholder="Pesel"><br>
        <textarea class="form_message" name="comment" placeholder="Treść wiadomości"></textarea>
        <p><input type="submit" class="btn btn-success" value="Send" name="submit">
        <input type="reset" class="btn btn-danger" value="Reset" name="reset"></p>
    </form>
</div>

<?php get_footer(); ?>

