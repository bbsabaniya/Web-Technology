const displayMsg = (msg, id, color) => {
    document.getElementById(id).innerHTML = msg;
    document.getElementById(id).style.color = color;
  };
  //First name
  const fnamevalidation = () => {
    const f_name = document.getElementById("fname").value;
    if (f_name == "") {
      displayMsg("First Name cannot be empty", "fnamemsg", "red");
      return false;
    } else if (f_name.length < 2) {
      displayMsg("First Name must have more than 2 character", "fnamemsg", "red");
      return false;
    } else if (!f_name.match(/^[a-zA-Z]+$/)) {
      displayMsg("First Name only accept alphabet", "fnamemsg", "red");
      return false;
    } else {
      displayMsg("First Name valid", "fnamemsg", "green");
      return true;
    }
  };
  //last name
  const lnamevalidation = () => {
    const l_name = document.getElementById("lname").value;
    if (l_name == "") {
      displayMsg("Last Name cannot be empty", "lnamemsg", "red");
      return false;
    } else if (l_name.length < 2) {
      displayMsg("Last Name must have more than 2 character", "lnamemsg", "red");
      return false;
    } else if (!l_name.match(/^[a-zA-Z]+$/)) {
      displayMsg("Last Name only accept alphabet", "lnamemsg", "red");
      return false;
    } else {
      displayMsg("Last Name valid", "lnamemsg", "green");
      return true;
    }
  };
  //email
  const emailvalidation = () => {
    const email = document.getElementById("email").value;
    if (email == "") {
      displayMsg("Email cannot be empty", "emailmsg", "red");
      return false;
    } else if (email.length < 2) {
      displayMsg("Email must have more than 2 character", "emailmsg", "red");
      return false;
    } else if (!email.match(/^[a-zA-Z][a-zA-Z.-_]+[@][a-z]+(\.)[a-z]+$/)) {
      displayMsg("Email format wrong", "emailmsg", "red");
      return false;
    } else {
      displayMsg("Email valid", "emailmsg", "green");
      return true;
    }
  };
  //password
  const pswvalidation = () => {
    const psw = document.getElementById("psw").value;
    if (psw == "") {
      displayMsg("Password cannot be empty", "pwdmsg", "red");
      return false;
    } else if (
      !psw.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!\._@?&]).{8,20}$/)
    ) {
      displayMsg("Password is not strong", "pwdmsg", "red");
      return false;
    } else {
      displayMsg("Password is strong", "pwdmsg", "green");
      return true;
    }
  };
  
  //confirm password
  const cpswvalidation = () => {
    const psw = document.getElementById("psw").value;
    const cpsw = document.getElementById("cpsw").value;
    if (cpsw == "") {
      displayMsg("Password cannot be empty", "cpwdmsg", "red");
      return false;
    } else if (cpsw !== psw) {
      displayMsg("Password doesnot match", "cpwdmsg", "red");
      return false;
    } else {
      displayMsg("Password matched", "cpwdmsg", "green");
      return true;
    }
  };
  
  //number
  const numbervalidation = () => {
    const number = document.getElementById("number").value;
    if (number == "") {
      displayMsg("Number cannot be empty", "numbermsg", "red");
      return false;
    } else if (!number.match(/^(\+\d{3}-)?\d{10}$/)) {
      //or (/^(?:\+\d{3}-)?\d{10}$/)
      displayMsg("Number format wrong", "numbermsg", "red");
      return false;
    } else {
      displayMsg("Correct number format", "numbermsg", "green");
      return true;
    }
  };
  //for number understanding purpose
  /*
  ^: Asserts the start of the string.
  (?: ... ): Non-capturing group for the optional international code.
  \+: Matches the plus sign.
  \d{3}: Matches exactly three digits (international code).
  -: Matches the hyphen between the international code and the local number.
  ?: Makes the preceding group (international code) optional.
  \d{10}: Matches exactly 10 digits for the local number.
  $: Asserts the end of the string.
  */
  
  //last ma submit huna parxa
  const validform = () => {
    if (
      fnamevalidation() &&
      lnamevalidation() &&
      emailvalidation() &&
      pswvalidation() &&
      cpswvalidation() &&
      numbervalidation()
    ) {
      return true;
    } else {
      return false;
    }
  };
  
  /*Used in number:
  Certainly! In regular expressions, (?: ... ) is a non-capturing group. Let's break it down:
  
  ( ... ): This is a capturing group. It's used to group together expressions and capture the matched content. Anything inside the parentheses is treated as a single unit.
  
  ?:: This is a special syntax within the parentheses. The ? after the colon : indicates that this group is non-capturing. It means that even though the group is used for grouping, the matched content inside the group won't be stored for back-referencing or extraction.
  
  
  
  simple word:
  In a regular expression, when you see (?: ... ), it's like putting a fence around something. The ?: is like saying, "Hey, I'm putting this fence for grouping, but don't remember what's inside."
  
  ( ... ): Regular grouping parentheses that capture and remember what's inside.
  (?: ... ): Non-capturing grouping parentheses – it still groups things together but doesn't remember them.
  
  So, when you use (?: ... ), it's like having a box without labels – you can use it for organization, but you won't retrieve or remember what's inside later.
  */
  