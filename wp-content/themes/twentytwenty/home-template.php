<?php
/**
 * Template Name: HomeTemplate
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- banner starts -->

<div class="banner">
        <div class="banner-content">
            <h1>Cornerstone Specialty Hospitals</h1>
            <p>Southwest Louisiana</p>
        </div>
    </div>

    <!-- banner ends -->

    <!-- body starts -->

    <div class="contact-info">
        
       
            <h2>Cornerstone Specialty Hospitals Southwest Louisiana</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut aperiam velit libero enim mollitia temporibus atque, repellat totam minus placeat eum doloribus neque qui dolorum laborum amet id facere perferendis.</p>
    
        </div>

        <section class="info-cards">
            <div class="card">
                <i class="fa-solid fa-map-location-dot"></i>
                                <p>524 Dr. Michael Debakey Drive, 3rd Floor, Lake Charles, LA 70601</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-phone"></i>
                <p>(123) 4567 890</p>
            </div>
            <div class="card">
                <i class="fa-brands fa-facebook-f"></i>
                <p>Follow Us</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-heart-pulse"></i>
                <p>Success Stories</p>
            </div>
        </section>
        
        <section class="accreditation">
                <h2>Accreditation</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex excepturi officiis fuga adipisci iure numquam? Beatae vero magni quisquam itaque doloribus officia ut sunt magnam. Saepe aut eum magni ipsam!</p>
                <img src="images/Images/employee 15.png" alt="The Joint Commission Logo">
            
        </section>
        
        <section class="virtual-tour">
            <div class="container">
                <h2>Take a Virtual Tour</h2>
                <div class="video-thumbnail">
                    <img src="images/Images/vitual image.jpg" alt="Virtual Tour Thumbnail">
                    <div class="play-button">
                        <i class="fa-regular fa-circle-play" id="play-video"></i>
                    </div>
                </div>
            </div>
        </section>
        
        <div id="video-popup" class="popup">
            <div class="popup-content">
                <span class="close-popup">&times;</span>
               <iframe width="560" height="315" id="popup-video" src="https://www.youtube.com/embed/z83I7jJszUM?controls=0&showinfo=0&rel=0&modestbranding=1&autoplay=1 
                " frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>


        <div class="carousel-container">
            <h2>Why We Make A Difference in Southwest Louisiana</h2>
            <div class="carousel">
                <div class="carousel-item active">
                    <video controls poster="images/Images/carasule 1.jpg">
                        <source src="images/Images/Video 1.mp4" type="video/mp4">
            </video>
        </div>

        <div class="carousel-item">
            <video controls poster="images/Images/carasule 2.jpg">
                <source src="images/Images/Video 1.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Add more items as needed -->
    </div>

    <button class="carousel-control prev" onclick="moveSlide(-1)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="carousel-control next" onclick="moveSlide(1)">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>

<div class="programes">
    <h2>Our Programs</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident perspiciatis soluta eaque facilis assum</p>

    

</div>

<div class="faq-container">
    <h2>Frequently Asked Questions</h2>

    <!-- FAQ item -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleFAQ(this)">
            Is a Cornerstone Specialty Hospital right for me? <span class="faq-toggle">-</span>
        </div>
        <div class="faq-answer" style="display: block;">
            Cornerstone Specialty Hospitals provide care for those who are ready to be discharged from a general acute care hospital, but require an additional extended period of intensive medical care before they are ready to return home. Treatment and care is designed to bridge the gap between the acute care hospital and home.
        </div>
    </div>

    <!-- Repeat FAQ items -->
    <div class="faq-item">
        <div class="faq-question" onclick="toggleFAQ(this)">
            Are Cornerstone Specialty Hospitals and nursing homes the same? <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            No, Cornerstone Specialty Hospitals provide more intensive care services compared to typical nursing homes, including longer-term acute care.
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question" onclick="toggleFAQ(this)">
            How are Cornerstone Specialty Hospitals different from general acute care hospitals? <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            Cornerstone Specialty Hospitals focus on long-term acute care and recovery, providing an extended care period that isn’t available in general hospitals.
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question" onclick="toggleFAQ(this)">
            Why do patients and families choose Cornerstone Specialty Hospitals? <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            Patients and families choose Cornerstone for its specialized care and longer-term recovery services, tailored to each patient’s needs.
        </div>
    </div>
</div>

<!-- Paragraphs after the FAQ section -->
<div class="additional-info">
    <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tempore accusantium non nostrum architecto atque amet</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident illum delectus odit dolores omnis deleniti? </p>

    <!-- Inline buttons -->
    <div class="button-group">
        <button class="primary-btn">Learn More</button>
        <button class="secondary-btn">Contact Us</button>
    </div>
</div>
<?php
get_footer();
