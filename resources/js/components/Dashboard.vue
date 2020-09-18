<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./users">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-users indigo nav-icon"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">User Management</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./project">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-bars green nav-icon"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Project</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./sector">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-bars green nav-icon"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Sector</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./contents">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-folder nav-icon teal"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">What We Do</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./blogs">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-blog nav-icon gray-dark"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Blogs Management</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./testimonials">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-comment-dots nav-icon purple"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Testimonials Management</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./contacts">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-phone nav-icon yellow"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Contacts Management</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>

      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./slider">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-sliders-h nav-icon green"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Slider Management</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./partner">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-handshake nav-icon red"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Partners Management</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <router-link to="./seo">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1">
              <i class="fas fa-star nav-icon teal"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Seo Management</span>
              <span class="info-box-number">
                Go To Page
                <small>
                  <i class="fas fa-chevron-right"></i>
                </small>
              </span>
            </div>
          </div>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
