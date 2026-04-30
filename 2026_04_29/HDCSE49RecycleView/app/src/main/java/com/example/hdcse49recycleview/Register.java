package com.example.hdcse49recycleview;

import android.content.Intent;
import android.os.Bundle;
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

public class Register extends AppCompatActivity {

    EditText name, phone, email, password;
    Button btnregister;

    FirebaseAuth auth;
    DatabaseReference databaseReference;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_register);

        auth = FirebaseAuth.getInstance();
        databaseReference = FirebaseDatabase.getInstance().getReference("users");

        name = findViewById(R.id.txtname);
        phone = findViewById(R.id.txtphone);
        email = findViewById(R.id.txtemail);
        password = findViewById(R.id.txtpass);
        btnregister = findViewById(R.id.btnregister);

        btnregister.setOnClickListener(v -> {
            String userEmail = email.getText().toString().trim();
            String userPass = password.getText().toString().trim();

            if (userEmail.isEmpty() || userPass.isEmpty()) {
                Toast.makeText(this, "Please enter email and password", Toast.LENGTH_SHORT).show();
                return;
            }

            // Fixed: Changed signInWithEmailAndPassword to createUserWithEmailAndPassword
            auth.createUserWithEmailAndPassword(userEmail, userPass)
                    .addOnCompleteListener(task -> {
                        if (task.isSuccessful()) {
                            String uid = auth.getCurrentUser().getUid();

                            // Fixed: Added the missing 'uid' argument to match User constructor
                            User user = new User(
                                    name.getText().toString(),
                                    phone.getText().toString(),
                                    userEmail,
                                    uid
                            );

                            databaseReference.child(uid).setValue(user);
                            Toast.makeText(this, "Registered Successfully", Toast.LENGTH_SHORT).show();
                            startActivity(new Intent(this, Login.class));
                            finish();
                        } else {
                            // Showing the actual error message helps debugging
                            String error = task.getException() != null ? task.getException().getMessage() : "Unknown error";
                            Toast.makeText(this, "Registration failed: " + error, Toast.LENGTH_LONG).show();
                        }
                    });
        });


        

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}

/*
 * The User constructor call in Register.java was updated to resolve a compilation error caused by a mismatch 
 * in the number of arguments. The User class requires four parameters—name, phone, email, and uid—but 
 * previously only three were being provided. By retrieving the unique identifier (uid) from FirebaseAuth 
 * and passing it as the fourth argument, the code now correctly instantiates the User object and 
 * ensures that each user's data is stored in the database with their specific record ID.
 */
