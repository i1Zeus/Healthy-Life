<x-app-layout>
    <div>
        <section class="home" id="home">
            <div class="image">
                <img src="/img/Healthy lifestyle-bro.png" alt="Healthy lifestyle" />
            </div>

            <div class="content">
                <h3>stay safe, stay healthy</h3>
                <p>
                    You have to go through life, hopefully trying to stay healthy, being
                    as happy as you can, and pursuing, you know, doing what you want
                </p>
                <a href="#" class="btn">
                    read more <span class="fas fa-chevron-right"></span>
                </a>
            </div>
        </section>

        <!-- home section ends -->

        <!-- icons section starts -->
        <section class="icos" id="sections">
            <h1 class="heading">website <span>sections</span></h1>

            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="/img/food.png" alt="food" />
                    </div>
                    <div class="content">
                        <h3>Healthy Meals</h3>
                        <p>
                            Healthy meals are an important part of maintaining good physical and mental health. They
                            involve
                            choosing a variety of whole, unprocessed foods, including plenty of vegetables, lean sources
                            of
                            protein, and limiting sugary drinks and snacks. Planning meals in advance can make it easier
                            to
                            stick to a healthy diet. Eating healthy meals can help you feel your best, have more energy,
                            and
                            reduce your risk of chronic diseases such as obesity, type 2 diabetes, and heart disease.
                        </p>
                        <a href="{{ route('healthy-meals') }}" class="btn">
                            learn more <span class="fas fa-chevron-right"></span>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/img/Eating food 2.png" alt="Eating food" />
                    </div>
                    <div class="content">
                        <h3>Diet</h3>
                        <p>
                            A healthy diet is an important part of maintaining good physical and mental health. It
                            involves
                            choosing a variety of whole, unprocessed foods, including plenty of vegetables, lean sources
                            of
                            protein, and limiting sugary drinks and snacks. Planning meals in advance can make it easier
                            to
                            stick to a healthy diet. Eating a healthy diet can help you feel your best, have more
                            energy,
                            and reduce your risk of chronic diseases such as obesity, type 2 diabetes, and heart
                            disease.
                        </p>
                        <a href="{{ route('diet') }}" class="btn">
                            learn more <span class="fas fa-chevron-right"></span>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/img/gym 2.png" alt="gym" />
                    </div>
                    <div class="content">
                        <h3>Sport Machines</h3>
                        <p>
                            Sports machines are specialized equipment used to improve physical fitness, sports
                            performance,
                            and rehabilitation. Examples of sports machines include treadmills, stationary bikes, weight
                            machines, and ellipticals. These machines can be found at gyms, physical therapy clinics.
                            Using
                            sports machines can help to improve cardiovascular endurance,
                            muscle strength, and flexibility. It is important to use proper form and technique to avoid
                            injury and get benefit from your workouts.
                        </p>
                        <a href="#" class="btn">
                            learn more <span class="fas fa-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- icons section ends -->

        <!-- library section starts -->
        <section class="library" id="library">
            <h1 class="heading">our <span>library</span></h1>

            <div class="row">
                <div class="image">
                    <img src="/img/Library-amico.png" alt="Library" />
                </div>

                <div class="content">
                    <h3>Read and learn through our library</h3>
                    <p>You can get free books in the field of healthy life</p>
                    <a href="{{ route('book-show') }}" class="btn">
                        read more <span class="fas fa-chevron-right"></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- library section ends -->
        <!-- service section starts -->
        <section class="services" id="services">
            <h1 class="heading">our <span>services</span></h1>

            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="/img/medical.png" alt="medical" />
                    </div>
                    <div class="content">
                        <h3>Medical Advice</h3>
                        <p>
                            Medical advice is information or recommendations provided by a healthcare professional, such
                            as
                            a doctor, nurse, or pharmacist, about how to manage or improve one's health.
                            <br><br>
                        </p>
                        <a href="#" class="btn">
                            learn more <span class="fas fa-chevron-right"></span>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/img/body.png" alt="body care" />
                    </div>
                    <div class="content">
                        <h3>body care</h3>
                        <p>
                            Body care involves taking care of your physical body through proper nutrition, exercise, and
                            hygiene. This includes eating a healthy diet, staying hydrated, getting regular physical
                            activity, and maintaining good personal hygiene practices such as bathing.
                        </p>
                        <a href="#" class="btn">
                            learn more <span class="fas fa-chevron-right"></span>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="/img/artical.png" alt="artical image" />
                    </div>
                    <div class="content">
                        <h3>Articles</h3>
                        <p>
                            Articles are written pieces of content that provide information, analysis, or opinions on a
                            particular topic. They can be found in newspapers, magazines, online publications, and other
                            media.<br><br>
                        </p>
                        <a href="#" class="btn">
                            learn more <span class="fas fa-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
