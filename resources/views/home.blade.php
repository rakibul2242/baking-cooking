<x-layouts.app :title="__('Home')">
    <main>
        <section class="relative bg-cover bg-center bg-no-repeat h-[36rem] flex items-center justify-center text-center"
            style="background-image: url('{{ asset('images/home-banner.png') }}');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="max-w-7xl relative z-10 text-white space-y-5">
                <h1 class="text-4xl md:text-5xl font-bold">From Kitchen to Career</h1>
                <h5 class="text-lg font-montserrat w-4/5 mx-auto">Master the art of culinary excellence with
                    expert-led
                    courses
                    and hands-on training</h5>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-6">
                    <a href="{{ route('home') }}"
                        class="px-8 py-3 bg-secondary hover:bg-secondary-hover text-white font-semibold rounded-md transition">View
                        Courses</a>
                    <a href="{{ route('home') }}"
                        class="px-8 py-3 bg-primary hover:bg-primary-hover text-white font-semibold rounded-md transition">Join
                        Now</a>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
                <h2 class="text-3xl font-bold text-center mb-8 text-secondary">Popular Courses</h2>
                <livewire:cooking-courses />
            </div>
        </section>

        <section class="bg-background">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
                <h2 class="text-3xl font-bold text-center mb-8 text-secondary">What Our Students Say</h2>
                <livewire:student-review />
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12 grid md:grid-cols-3 gap-6 text-center">
                <div class="flex flex-col items-center space-y-3">
                    <image src="{{ asset('images/stars/star1.png') }}" alt="chef" class="w-12 h-auto">
                        <p class="text-4xl font-bold text-orange-600 mb-2">1000+</p>
                        <p class="text-gray-700">Students Trained</p>
                </div>
                <div class="flex flex-col items-center space-y-3">
                    <image src="{{ asset('images/stars/star2.png') }}" alt="chef" class="w-12 h-auto">
                        <p class="text-4xl font-bold text-orange-600 mb-2">50+</p>
                        <p class="text-gray-700">Professional Instructors</p>
                </div>
                <div class="flex flex-col items-center space-y-3">
                    <image src="{{ asset('images/stars/star3.png') }}" alt="chef" class="w-12 h-auto">
                        <p class="text-4xl font-bold text-orange-600 mb-2">100+</p>
                        <p class="text-gray-700">Courses Available</p>
                </div>
            </div>
        </section>

        <section class="bg-background">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12 text-center">
                <div class="max-w-2xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-8 text-secondary">Stay Updated</h2>
                    <p class="text-gray-600 mb-6">Subscribe to our newsletter for the latest courses and culinary
                        insights
                    </p>
                    <form class="flex flex-col md:flex-row justify-center gap-4 mx-auto">
                        <input type="email" placeholder="Enter your email"
                            class="border border-gray-300 rounded px-4 py-2 w-full md:w-3/5">
                        <button type="submit"
                            class="bg-primary hover:bg-primary text-white px-6 py-2 rounded">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>

        <footer class="bg-secondary">
            <div class="max-w-6xl mx-auto text-white border ">
                <div class="grid md:grid-cols-4 gap-6 border-b py-16 border-gray-600">
                    <div class="flex flex-col items-start space-y-2">
                        <image src="{{ asset('images/logo2.png') }}" alt="Logo" class="h-10 mb-4">
                            <p class="text-gray-300">Transforming passionate cooks into culinary professionals</p>
                    </div>
                    <div class="flex flex-col items-start space-y-2">
                        <h4 class="font-bold">Quick Links</h4>
                        <a href="#" class="text-gray-300 hover:text-white">About Us</a>
                        <a href="#" class="text-gray-300 hover:text-white">Courses</a>
                        <a href="#" class="text-gray-300 hover:text-white">Instructors</a>
                    </div>
                    <div class="flex flex-col items-start space-y-2">
                        <h4 class="font-bold">Resources</h4>
                        <a href="#" class="text-gray-300 hover:text-white">Recipe Library</a>
                        <a href="#" class="text-gray-300 hover:text-white">Student Portal</a>
                        <a href="#" class="text-gray-300 hover:text-white">Career Support</a>
                    </div>
                    <div class="flex flex-col items-start space-y-2">
                        <h4 class="font-bold">Contact Us</h4>
                        <p class="text-gray-300">123 Culinary Street<br>Cooking City, CC 12345</p>
                        <p class="text-gray-300">+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="text-center text-sm text-gray-500 mt-8">
                    &copy; 2025 Culinary School. All rights reserved.
                </div>
            </div>
        </footer>
    </main>
</x-layouts.app>
