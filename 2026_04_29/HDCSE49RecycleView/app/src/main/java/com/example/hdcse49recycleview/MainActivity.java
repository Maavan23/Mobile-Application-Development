package com.example.hdcse49recycleview;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import com.google.firebase.auth.FirebaseAuth;

public class MainActivity extends AppCompatActivity {

    Button btnViewEmployees, btnLogout;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        btnViewEmployees = findViewById(R.id.btnViewEmployees);
        btnLogout = findViewById(R.id.btnLogout);

        // This button will now open your Employees list (RecyclerView)
        btnViewEmployees.setOnClickListener(v -> {
            startActivity(new Intent(MainActivity.this, Employees.class));
        });

        // Optional: Logout functionality
        btnLogout.setOnClickListener(v -> {
            FirebaseAuth.getInstance().signOut();
            startActivity(new Intent(MainActivity.this, Login.class));
            finish();
        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}


/*I renamed the btncon button to btnViewEmployees, fixed the Intent in MainActivity.java
to point to Employees.class, and added a logout button to make switching accounts more convenient.*/