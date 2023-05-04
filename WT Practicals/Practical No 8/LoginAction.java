package com.example;

import com.opensymphony.xwork2.ActionSupport;

public class LoginAction extends ActionSupport {
    private String name;
    private String mobileNumber;
    private String emailId;

    // getters and setters

    public String execute() {
        // validate inputs here
        if (name == null || name.trim().isEmpty()) {
            addFieldError("name", "Name is required.");
            return INPUT;
        }
        if (mobileNumber == null || mobileNumber.trim().isEmpty()) {
            addFieldError("mobileNumber", "Mobile number is required.");
            return INPUT;
        }
        if (emailId == null || emailId.trim().isEmpty()) {
            addFieldError("emailId", "Email id is required.");
            return INPUT;
        }

        // perform login logic here
        return SUCCESS;
    }
}
