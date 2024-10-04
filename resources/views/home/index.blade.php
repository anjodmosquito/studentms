@extends('layout')

@section('content')

<!-- Hero Section -->
<div class="bg-[#B5C99A] text-center py-20">
    <h1 class="text-5xl font-bold text-white mb-4">Transform Your Education with Our Student Management System</h1>
    <p class="text-xl text-[#F0E8E2] mb-8">A Comprehensive Solution for Modern Educational Institutions</p>
    <button class="bg-[#4CAF50] text-black font-bold py-2 px-4 rounded-full">
        Learn More
    </button>
</div>

<!-- Features Section -->
<div class="container mx-auto mt-12">
    <h2 class="text-3xl font-bold text-center mb-8">Key Features</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

        <!-- Feature 1: Enrollment Management -->
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h2 class="text-2xl font-semibold mb-4">Enrollment Management</h2>
            <p class="text-gray-600 mb-4">Effortlessly manage student enrollments, courses, and batch allocations.</p>
            <ul class="list-disc list-inside text-left text-gray-500">
                <li>Simple registration process</li>
                <li>Real-time enrollment tracking</li>
                <li>Automated notifications for deadlines</li>
            </ul>
        </div>

        <!-- Feature 2: Academic Records -->
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h2 class="text-2xl font-semibold mb-4">Academic Records</h2>
            <p class="text-gray-600 mb-4">Maintain comprehensive academic records for every student.</p>
            <ul class="list-disc list-inside text-left text-gray-500">
                <li>Grades and assessments</li>
                <li>Attendance tracking</li>
                <li>Easy report generation</li>
            </ul>
        </div>

        <!-- Feature 3: Communication Tools -->
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h2 class="text-2xl font-semibold mb-4">Communication Tools</h2>
            <p class="text-gray-600 mb-4">Enhance communication between students, parents, and faculty.</p>
            <ul class="list-disc list-inside text-left text-gray-500">
                <li>Instant messaging and announcements</li>
                <li>Parent-teacher communication portal</li>
                <li>Event scheduling and reminders</li>
            </ul>
        </div>

    </div>
</div>

<!-- Benefits Section -->
<div class="container mx-auto mt-20 mb-12">
    <h2 class="text-3xl font-bold text-center mb-10">Why Choose Our Student Management System?</h2>
    <div class="text-center text-lg text-gray-600 mb-6">
        <p>Our Student Management System is designed to streamline administrative tasks, enhance communication, and improve the overall educational experience.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4">Save Time and Resources</h3>
            <p>Automate routine tasks and reduce manual paperwork, allowing staff to focus on what matters most: student success.</p>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4">Improve Student Engagement</h3>
            <p>Keep students informed and engaged with timely updates, notifications, and easy access to resources.</p>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4">Data-Driven Decisions</h3>
            <p>Access analytics and reports to make informed decisions that enhance the learning environment.</p>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4">User-Friendly Interface</h3>
            <p>Designed for ease of use, our system ensures that all users, from admin to students, can navigate effortlessly.</p>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-[#F0E8E2] text-center py-12">
    <h2 class="text-3xl font-bold mb-4">Ready to Elevate Your Institution?</h2>
    <p class="text-lg mb-6">Join countless other educational institutions that have transformed their operations.</p>
    <button class="bg-[#4CAF50] text-black font-bold py-2 px-4 rounded-full">
        Get Started Today!
    </button>
</div>

@endsection
