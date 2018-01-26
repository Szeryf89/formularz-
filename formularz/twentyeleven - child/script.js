console.log('script work!');

function ValidateContactForm()
{
    var name = document.ContactForm.Name;
    var email = document.ContactForm.Email;
    var pesel = document.ContactForm.Pesel;
    var comment = document.ContactForm.Comment;

    if (name.value == "")
    {
        window.alert("Proszę podać imię i nazwisko.");
        name.focus();
        return false;
    }

    if (email.value == "")
    {
        window.alert("Proszę podać adres e-mail.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Proszę podać poprawny e-mail - brakuje @.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0)
    {
        window.alert("Proszę podać poprawny e-mail - brak domeny np. .pl.");
        email.focus();
        return false;
    }
    if (pesel.value == "")
    {
        window.alert("Proszę podać nr pesel.");
        pesel.focus();
        return false;
    }

    if (comment.value == "")
    {
        window.alert("Proszę wprowadzić treść wiadomości.");
        comment.focus();
        return false;
    }
    return true;
}
