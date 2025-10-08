<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Sample data for users table
        $data = [
            // Admin user
            [
                'username'   => 'admin',
                'email'      => 'admin@lms.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'first_name' => 'System',
                'last_name'  => 'Administrator',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Instructor users
            [
                'username'   => 'prof_smith',
                'email'      => 'smith@lms.com',
                'password'   => password_hash('instructor123', PASSWORD_DEFAULT),
                'role'       => 'instructor',
                'first_name' => 'John',
                'last_name'  => 'Smith',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'prof_johnson',
                'email'      => 'johnson@lms.com',
                'password'   => password_hash('instructor123', PASSWORD_DEFAULT),
                'role'       => 'instructor',
                'first_name' => 'Sarah',
                'last_name'  => 'Johnson',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Student users
            [
                'username'   => 'student1',
                'email'      => 'student1@lms.com',
                'password'   => password_hash('student123', PASSWORD_DEFAULT),
                'role'       => 'student',
                'first_name' => 'Alice',
                'last_name'  => 'Brown',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'student2',
                'email'      => 'student2@lms.com',
                'password'   => password_hash('student123', PASSWORD_DEFAULT),
                'role'       => 'student',
                'first_name' => 'Bob',
                'last_name'  => 'Wilson',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'student3',
                'email'      => 'student3@lms.com',
                'password'   => password_hash('student123', PASSWORD_DEFAULT),
                'role'       => 'student',
                'first_name' => 'Carol',
                'last_name'  => 'Davis',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username'   => 'yuannn18',
                'email'      => 'jimenezyuan76@gmail.com',
                'password'   => password_hash('jimenez123', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'first_name' => 'Yuan',
                'last_name'  => 'Jimenez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data into users table
        $this->db->table('users')->insertBatch($data);
        
        echo "UserSeeder completed successfully!\n";
        echo "Added " . count($data) . " users to the database.\n";
    }
}
