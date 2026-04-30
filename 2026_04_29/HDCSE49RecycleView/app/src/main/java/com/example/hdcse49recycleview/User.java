package com.example.hdcse49recycleview;

public class User {
    public String name, phone, email, uid;

    public User(){

    }

    public User(String name, String phone, String email, String uid) {
        this.name = name;
        this.phone = phone;
        this.email = email;
        this.uid = uid;
    }
}

/*
 * Updated to include a 'uid' field, which allows the app to store the
 * unique identifier from Firebase needed for deleting specific records.
 */
