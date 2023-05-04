<%@ taglib prefix="s" uri="/struts-tags"%>
<html>
<head>
<title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <s:form action="loginAction" method="post">
        <s:textfield name="name" label="Name" />
        <s:textfield name="mobileNumber" label="Mobile Number" />
        <s:textfield name="emailId" label="Email Id" />
        <s:submit value="Login" />
    </s:form>
</body>
</html>
