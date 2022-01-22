<?php 

include './inc/db.php';
include './inc/form_email.php';


$sql = 'SELECT * FROM `yenihaber`';
$result= mysqli_query($conn,$sql);
$haber = mysqli_fetch_all($result, MYSQLI_ASSOC);



// colse mysql

mysqli_free_result($result);
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staj2</title>
<!--  font Awesome lcons-->
<link rel="stylesheet" href="./css/all.css">

<!---------------OWl-Carousel----------------->
<link rel="stylesheet" href="./css/./owl.carousel.min.css">
<link rel="stylesheet" href="./css/owl.theme.default.min.css">


<!--                   AOS Library                           -->

<link rel="stylesheet" href="./css/aos.css">

    <!--Custom Style -->
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>

    
    <!----------------   NAvigation--------------------------->


    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">DENE</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#main">main</a>
                    </li>
                    <li class="nav-link">
                        <a href="#sayfa">Sayfalar</a>
                    </li>
                    <li class="nav-link">
                        <a href="#kategori">Kategori</a>
                    </li>
                    <li class="nav-link">
                        <a href="#son">Arşiv</a>
                    </li>
                    <li class="nav-link">
                        <a href="indexhizmet.php">iletişim</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/mido.homs.56"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/halim_136_/?hl=tr"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/halimsamoglu"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCpKTEU6lpghtdvTpvHeEFvw"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>
    

    <!-----------x-----   NAvigation-------------x-------------->

        <!--------------- MAin Site Section--------------->

        <main>
            <!-----------------Site Title------------------->


            <section class="site-title" id="main">
                <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                    <h3>Web Tasarımı & mobile uygulama</h3>
                    <h1>Programlama</h1>
                    <a href="indexhizmet.php">
                    <button class="btn">Tıkla</button></a>
                </div>
            </section>



              <!-------------x----Site Title---------x---------->

              
            <!--------- Blog CArousel--------------------->

            <section>
                <div class="blog">
                    <div class="container">
                        <div class="owl-carousel owl-theme blog-post">
                            <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                                <img src="./assets/Blog-post/post-1.jpg" alt="post-1">
                                <div class="blog-title">
                                    <h3>web tasarım</h3>
                                    <a href="indexhizmet.php">
                                    <button class="btn btn-blog">istiyorum</button>
                                </a>
                                    <span>Verilmiş Hizmet sayısı : 14</span>
                                </div>
                            </div>
                            <div class="blog-content"data-aos="fade-right" data-aos-delay="200">
                                <img src="./assets/Blog-post/post-3.jpg" alt="post-3">
                                <div class="blog-title">
                                    <h3>mobile uygulama</h3>
                                    <a href="indexhizmet.php">
                                    <button class="btn btn-blog">istiyorum</button>
                                </a>
                                    <span>Verilmiş Hizmet sayısı : 32</span>
                                </div>
                            </div>
                            <div class="blog-content"data-aos="fade-right" data-aos-delay="200">
                                <img src="./assets/Blog-post/post-2.jpg" alt="post-2">
                                <div class="blog-title">
                                    <h3>Sosyal ağlarla entegrasyon</h3>
                                    <a href="indexhizmet.php">
                                    <button class="btn btn-blog">istiyorum</button>
                                </a>
                                    <span>Verilmiş Hizmet sayısı : 63</span>
                                </div>
                            </div>
                            <div class="blog-content"data-aos="fade-right" data-aos-delay="200">
                                <img src="./assets/Blog-post/post-5.jpg" alt="post-5">
                                <div class="blog-title">
                                    <h3>Google Maps</h3>
                                    <a href="indexhizmet.php">
                                    <button class="btn btn-blog">istiyorum</button>
                                </a>
                                    <span>Verilmiş Hizmet sayısı : 117</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-navigation">
                            <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                            <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                </div>
            </section>


              <!---x------ Blog CArousel---------x------------>

              <!-------------Site Content---------------------------->

              <section class="container" id="sayfa">
                  <div class="site-content">
                      <div class="posts">
                          <div class="post-content"data-aos="zoom-in" data-aos-delay="200">
                              <div class="post-image">
                                  <div>
                                      <img src="./assets/Blog-post/blog1.jpg" class="img" alt="blog1">
                                  </div>
                                  <div class="post-info flex-row">
                                      <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Yönetici</span>
                                      <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Mart 1. 2021</span>
                                      <span>2 Yorum</span>

                                  </div>
                              </div>
                              <div class="post-title">
                                  <a href="#">Kendi web sitenizi oluşturmak ve İnternet üzerinden müşteri çekmek ister misiniz?</a>
                                  <p>Firmamız sitenin çalışmasını sağlarken tüm işletme firmalarına uygun web siteleri tasarlayabilir. Ve iki ay içinde “ücretsiz” değişiklikler ekleyebilirsiniz!</p>
                                  <a href="https://tr.wiki2.wiki/wiki/Web_design">
                                    <button class="btn post-btn">daha fazla oku .. &nbsp;<i class="fas fa-arrow-right"></i></button>
                                  </a>
    
                              </div>
                          </div>
                          <hr>
                          <div class="post-content"data-aos="zoom-in" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/blog2.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Yönetici</span>
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Nisan 16. 2021</span>
                                    <span>7 Yorum</span>

                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Koruma</a>
                                <p>Kod, sunucu güvenliği ve aktivasyon açısından mevcut en yüksek koruma yöntemlerini sağlamak
                                    ssl!</p>
                                    <a href="https://tr.wikipedia.org/wiki/Bilgisayar_g%C3%BCvenli%C4%9Fi">
                                <button class="btn post-btn">daha fazla oku .. &nbsp;<i class="fas fa-arrow-right"></i></button>
                            </a>
  
                            </div>
                        </div>
                        <hr>
                        <div class="post-content"data-aos="zoom-in" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/blog3.jpeg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Yönetici</span>
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; Mayıs 19. 2021</span>
                                    <span>5 Yorum</span>

                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Kendi web sitenizi oluşturmak ve İnternet üzerinden müşteri çekmek ister misiniz?</a>
                                <p>Firmamız sitenin çalışmasını sağlarken tüm işletme firmalarına uygun web siteleri tasarlayabilir. Ve iki ay içinde “ücretsiz” değişiklikler ekleyebilirsiniz!</p>
                                <a href="https://tr.wikipedia.org/wiki/Arama_motoru_optimizasyonu">
                                <button class="btn post-btn">daha fazla oku .. &nbsp;<i class="fas fa-arrow-right"></i></button>
                            </a>
  
                            </div>
                        </div>
                        <hr>
                        <div class="post-content"data-aos="zoom-in" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/Blog-post/blog4.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Yönetici</span>
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Haziran 21. 2021</span>
                                    <span>12 Yorum</span>

                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">İş yerinizi Google Haritalar'a eklemek ister misiniz?</a>
                                <p>DENE, iş yerinizi Google Haritalar'a kolayca ekleyebiliriz.Tek yapmanız gereken bizimle iletişime geçmek !</p>
                                <a href="https://tr.wikipedia.org/wiki/Google_Haritalar">
                                <button class="btn post-btn">daha fazla oku .. &nbsp;<i class="fas fa-arrow-right"></i></button>
                            </a>
  
                            </div>
                        </div>
                        <div class="pagination flex-row">
                            <a href="#" ><i class="fas fa-chevron-left"></i></a>
                            <a href="#" class="pages">1</a>
                            <a href="#" class="pages">2</a>
                            <a href="#" class="pages">3</a>

                            <a href="#"><i class="fas fa-chevron-right"></i></a>

                        </div>
                      </div>
                      <aside class="sidebar" id="kategori">
                          <div class="category">
                              <h2>Categori</h2>
                              <ul class="category-list">
                                  <li class="list-items"data-aos="fade-left" data-aos-delay="200">
                                      <a href="#">Web tasarım</a>
                                      <span>(07)</span>
                                  </li>
                                  <li class="list-items"data-aos="fade-left" data-aos-delay="200">
                                    <a href="#">mobile uygulama</a>
                                    <span>(05)</span>
                                </li>
                                <li class="list-items"data-aos="fade-left" data-aos-delay="200">
                                    <a href="#">Google Maps</a>
                                    <span>(13)</span>
                                </li>
                                <li class="list-items"data-aos="fade-left" data-aos-delay="200">
                                    <a href="#">Sosyal midya</a>
                                    <span>(24)</span>
                                </li>
                                <li class="list-items"data-aos="fade-left" data-aos-delay="200">
                                    <a href="#">Ağlar</a>
                                    <span>(06)</span>
                                </li>
                                <li class="list-items"data-aos="fade-left" data-aos-delay="200">
                                    <a href="#">internet</a>
                                    <span>(13)</span>
                                </li>
                                <li class="list-items"data-aos="fade-left" data-aos-delay="200">
                                    <a href="#">yönetme</a>
                                    <span>(03)</span>
                                </li>
                              </ul>
                          </div>
                          <div class="popular-post" id="son">
                              <h2>Son Projeler</h2>

                              <div class="post-content"data-aos="flip-up" data-aos-delay="200">
                                <div class="post-image">
                                    <div>
                                        <img src="./assets/popular-post/m-blog-1.jpg" class="img" alt="blog1">
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Mart 14. 2019</span>
                                        <span>2 Yorum</span>
  
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">Otel web sitesi</a>
      
                                </div>
                            </div>
                            <div class="post-content"data-aos="flip-up" data-aos-delay="300">
                                <div class="post-image">
                                    <div>
                                        <img src="./assets/popular-post/m-blog-2.jpg" class="img" alt="blog1">
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Ocak 14. 2020</span>
                                        <span>5 Yorum</span>
  
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">muhasebe şirketi web sitesi</a>
      
                                </div>
                            </div>
                            <div class="post-content"data-aos="flip-up" data-aos-delay="400">
                                <div class="post-image">
                                    <div>
                                        <img src="./assets/popular-post/m-blog-3.jpg" class="img" alt="blog1">
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Temmuz 28. 2020</span>
                                        <span>6 Yorum</span>
  
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">Teslimat Uygulaması</a>
      
                                </div>
                            </div>
                            <div class="post-content"data-aos="flip-up" data-aos-delay="500">
                                <div class="post-image">
                                    <div>
                                        <img src="./assets/popular-post/m-blog-4.jpg" class="img" alt="blog1">
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Şubat 05. 2021</span>
                                        <span>9 Yorum</span>
  
                                    </div>
                                </div>
                                <div class="post-title">
                                    <a href="#">dershane</a>
      
                                </div>
                            </div>
                            <div class="post-content"data-aos="flip-up" data-aos-delay="600">
                                <div class="post-image">
                                    <div>
                                        <img src="./assets/popular-post/m-blog-5.jpg" class="img" alt="blog1">
                                    </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Mayıs 19. 2021</span>
                                        <span>7 Yorum</span>
      
                                    </div>
                                </div>
                                    <div class="post-title">
                                        <a href="#">Lokanta Uygulaması</a>
          
                                    </div>
                            </div>
                         </div>
                         <div class="newsletter"data-aos="fade-up" data-aos-delay="300">
                             <h2>Haberler</h2>
                             <form action="index.php" method="POST">
                             <div class="form-element">
                                 <input type="email" name="email" class="input-element" placeholder="Email">
                                 <input type="submit" name="submit" class="btn form-btn" value="Abone ol"></input>
                                 </form>
                             </div>
                         </div>
                         <div class="popular-tags">
                             <h2>sabit etiketler</h2>
                             <div class="tags flex-row">
                                 <span class="tag"data-aos="flip-up" data-aos-delay="100">Yazılım</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="200">Teknoloji</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="300">Tasarım</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="400">Sosyal midya</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="500">Mobile</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="600">Uygulamalar</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="700">Proje</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="800">web</span>
                                 <span class="tag"data-aos="flip-up" data-aos-delay="900">internet</span>


                             </div>
                         </div>

                      </aside>
                  </div> 
              </section>

             <!----x---------Site Content---------------x------------->


        </main>


        <!----------x---- MAin Site Section------x--------->


        <!-------------- Footer  ----------------------->


        <footer class="footer">
            <div class="container">
                <div class="about-us"data-aos="fade-right" data-aos-delay="200">
                    <h2>Hakkımızda</h2>
                    <p>Her yerde her zamanda biz varız
                        Web ile ilgili tüm hizmetleri veririz!</p>

                </div>
                <div class="newsletter"data-aos="fade-right" data-aos-delay="200">
                    <h2>Yeni haberler</h2>
                    <p>En son ürünlerimizle güncel kalın</p>
                    <form action="./index.php" method="POST" >
                    <div class="form-element">
                        <input type="text" name="email" placeholder="Email" >
                        <span ><i type="submit" class="fas fa-chevron-right"></i></span>
                        
                    </div>
                    </form>
                </div>
                <div class="instagram"data-aos="fade-left" data-aos-delay="200">
                    <h2>instagram</h2>
                    <div class="flex-row">
                        <img src="./assets/instagram/thumb-card3.jpg" alt="insta1">
                        <img src="./assets/instagram/thumb-card4.jpg" alt="insta2">
                        <img src="./assets/instagram/thumb-card5.jpg" alt="insta3">

                    </div>
                    <div class="flex-row">
                        <img src="./assets/instagram/thumb-card6.jpg" alt="insta4">
                        <img src="./assets/instagram/thumb-card7.jpg" alt="insta5">
                        <img src="./assets/instagram/thumb-card8.jpg" alt="insta6">

                    </div>
                </div>
                <div class="follow"data-aos="fade-left" data-aos-delay="200">
                    <h2>Bizi takip edin</h2>
                    <p>Sosyal olalım</p>
                    <div>
                        <a href="https://www.facebook.com/mido.homs.56"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/halim__136/?hl=tr"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/halimsamoglu"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCpKTEU6lpghtdvTpvHeEFvw"><i class="fab fa-youtube"></i></a>

                    </div>
                </div>
            </div>


            
            <div class="rights flex-row">
                <h4 class="text-gray">
                    Telif hakkı @2021 Tüm hakları saklıdır | tarafından yapılmış
                    <a href=" https://www.youtube.com/channel/UCpKTEU6lpghtdvTpvHeEFvw"target="_black">
                        ABD ALHALEM SHABALOUT <i class="fab fa-youtube"></i>
                        Kanal</a>
                </h4>
            </div>
            <div class="move-up">
                <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
            </div>
            <a href="https://wa.me/+905510360475" target="blank" style="position:fixed ; bottom:20px ; left:30px ; color:green "> <i style="font-size:50px;" class="fab fa-whatsapp"></i></a>
        </footer>




        <!----------x---- Footer  -------------x--------->




        <!-- jquery libarary file-->
        <script src="./js/jquery3.5.1.min.js"></script>


        <!---------------OWl-Carousel js----------------->
        <script src="./js/owl.carousel.min.js"></script>
        
        <!--                   AOS js Library                           -->
        <script src="./js/aos.js"></script>



    <!--Custom javascript file-->
    <script src="./js/main.js"></script>
    
</body>
</html>