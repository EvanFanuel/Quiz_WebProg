@extends('layouts.app')

@section('title', 'About Us - EduFun')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold mb-3">About EduFun</h1>
                <p class="lead text-muted">Empowering students with free quality education in IT</p>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <h3 class="mb-3">Our Mission</h3>
                        <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                            EduFun is dedicated to providing free, high-quality educational content to students pursuing careers in Information Technology. 
                            We believe that knowledge should be accessible to everyone, regardless of their background or financial situation.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="mb-3">What We Offer</h3>
                        <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                            Our platform focuses on two main areas of IT education:
                        </p>
                        <ul class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                            <li><strong>Interactive Multimedia:</strong> Covering topics like Human-Computer Interaction, User Experience, and Digital Immersive Technology</li>
                            <li><strong>Software Engineering:</strong> Including Pattern Software Design, Agile Development, and Code Reengineering</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h3 class="mb-3">Our Approach</h3>
                        <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                            We collaborate with industry experts and experienced educators to create comprehensive, easy-to-understand articles 
                            that help students grasp complex IT concepts. Our content is regularly updated to reflect the latest trends and 
                            best practices in the technology industry.
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="mb-3">Join Our Community</h3>
                        <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                            Whether you're a beginner starting your IT journey or an experienced professional looking to expand your knowledge, 
                            EduFun has something for everyone. Explore our articles, learn at your own pace, and join thousands of students 
                            who trust EduFun for their IT education.
                        </p>
                    </div>

                    <div class="text-center mt-5">
                        <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-5">Start Learning Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection