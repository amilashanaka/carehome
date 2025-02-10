<!-- Enquiry section start-->
<section class="mb-0">
  <div class="container-fluid py-5 mb-0">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">Need A Enquiry? <span class="custom-highlight">Please Feel Free to Contact Us</span>
            </h1>
          </div>
          <div class="row gx-3">
            <div class="col-sm-6 ">
              <h5 class="mb-4"><i class="fa fa-reply site-sub-name-color me-3"></i>Reply within 24 hours</h5>
            </div>
            <div class="col-sm-6 ">
              <h5 class="mb-4"><i class="fa fa-phone-alt site-sub-name-color me-3"></i>24 hrs telephone support</h5>
            </div>
          </div>
          <p class="mb-4 fs-5">Have questions or need more information? Click the Enquiry button to get in touch with
            us. At New Beginnings Care Home,
            we're here to assist you with personalized care solutions and ensure your peace of mind.</p>
          <div class="d-flex align-items-center mt-2 ">
            <div class="sub-bg-color d-flex align-items-center justify-content-center rounded"
              style="width: 60px; height: 60px;">
              <i class="fa fa-phone-alt text-white site-sub-name-color"></i>
            </div>
            <div class="ps-4">
              <h5 class="mb-2">Feel free to as any question</h5>
              <h4 class="site-sub-name-color mb-0"><?=$setting->getSettings('f4')?></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="sub-bg-color rounded h-100 d-flex align-items-center p-5 ">
            <form>
              <div class="row g-3">
                <div class="col-xl-12">
                  <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                    style="height: 55px;">
                </div>
                <div class="col-12">
                  <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                    style="height: 55px;">
                </div>
                <div class="col-12">
                  <textarea id="emailBody" class="form-control bg-light border-0" rows="3"
                    placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                  <button class="btn custom-btn w-100 py-3" onclick=sendEmail()>Send Enquiry</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="main-bg-color">
</section>
<!-- Enquiry section start-->