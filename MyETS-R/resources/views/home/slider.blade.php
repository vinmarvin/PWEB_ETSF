<style>
  .contact-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  text-align: center;
  width: auto; /* Ini akan mengatur lebar tombol agar sesuai dengan isi teks */
  margin-top: 15px;
}

.contact-button:hover {
  background-color: #0056b3;
}
</style>

<section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row d-flex align-items-center">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>
                    Sugeng rawuh <br>
                    ing web kito
                  </h1>
                  <p>
                    Panganku adalah aplikasi yang membantu distribusi pangan dengan kualitas bagus dan harga yang terjangkau. Kami memastikan produk yang disediakan berasal dari sumber terbaik, sehingga pelanggan dapat menikmati bahan pangan berkualitas tinggi tanpa harus membayar lebih. Dengan Panganku, belanja kebutuhan pangan menjadi lebih mudah dan efisien, menjangkau seluruh lapisan masyarakat.
                  </p>
                  <a href="mailto:5025231215@student.its.ac.id" class="contact-button">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="col-md-5">
                <div class="img-box">
                  <img style="width:100%;" src="images/image3.jpeg" alt="Pangan" height=300px />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
@media (max-width: 768px) {
  .row {
    flex-direction: column;
  }

  .img-box img {
    width: 100%;
    height: auto;
  }
}
</style>
