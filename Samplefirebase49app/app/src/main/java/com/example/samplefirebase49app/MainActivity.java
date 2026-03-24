package com.example.samplefirebase49app;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class MainActivity extends AppCompatActivity {

    EditText name, age, email, password;

    Button saveBtn;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        FirebaseDatabase database;
        DatabaseReference databaseReference;

        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        saveBtn = findViewById(R.id.btn_Save);

        name = findViewById(R.id.txt_Name);
        age = findViewById(R.id.txt_Age);
        email = findViewById(R.id.txt_Email);
        password = findViewById(R.id.txt_Password);

        databaseReference = FirebaseDatabase.getInstance().getReference("Employees");

        saveBtn.setOnClickListener( v -> {
            String empname = name.getText().toString();
            String empage = age.getText().toString();
            String empemail = email.getText().toString();
            String emppassword = password.getText().toString();

            if(empname.isEmpty() || empage.isEmpty() || empemail.isEmpty() || emppassword.isEmpty()) {
                Toast.makeText(MainActivity.this, "Please fill all fields", Toast.LENGTH_SHORT).show();
                return;
            }

            String id = databaseReference.push().getKey();
            EmployeeModel employeeModel = new EmployeeModel (id, empname, empage, empemail, emppassword);

            databaseReference.child(id).setValue(employeeModel).addOnCompleteListener(task -> {
                Toast.makeText(MainActivity.this, "Employee Model Saved Successfully", Toast.LENGTH_SHORT).show();
            });

            name.setText("");
            age.setText("");
            email.setText("");
            password.setText("");  //this auto clear fields details after typed

        });



        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
}