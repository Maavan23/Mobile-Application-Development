package com.example.hdcse49recycleview;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class Login extends AppCompatActivity {

    EditText txtemail1, txtpassword1;

    Button btnlogin1, btnsignup1;

    FirebaseAuth auth;
    DatabaseReference databaseReference;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);setContentView(R.layout.activity_login);

        auth = FirebaseAuth.getInstance();
        databaseReference = FirebaseDatabase.getInstance().getReference("users");

        txtemail1 = findViewById(R.id.txtemail1);
        txtpassword1 = findViewById(R.id.txtpassword1);
        btnlogin1 = findViewById(R.id.btnlogin1);
        btnsignup1 = findViewById(R.id.btnsignup1);

        btnlogin1.setOnClickListener(v -> {
            String userEmail = txtemail1.getText().toString().trim();
            String userPass = txtpassword1.getText().toString().trim();

            if (userEmail.isEmpty() || userPass.isEmpty()) {
                Toast.makeText(this, "Please enter all fields", Toast.LENGTH_SHORT).show();
                return;
            }

            auth.signInWithEmailAndPassword(userEmail, userPass)
                    .addOnCompleteListener(task -> {
                       if (task.isSuccessful()) {
                           Toast.makeText(Login.this, "Login Successful" ,Toast.LENGTH_SHORT).show();
                           startActivity(new Intent(Login.this, MainActivity.class));
                       } else {
                           String error = task.getException() != null ? task.getException().getMessage() : "Login Failed";
                           Toast.makeText(Login.this, "Error" + error, Toast.LENGTH_SHORT).show();
                       }
                    });
        });

        btnsignup1.setOnClickListener(v -> {
            startActivity(new Intent(Login.this, Register.class));
        });
    }
}