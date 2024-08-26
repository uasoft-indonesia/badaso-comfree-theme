import Alpine from "alpinejs";
import money from "alpinejs-money";

function fetchAuthenticated() {
  return {
    token: localStorage.token,
    formLogin: {
      email: "",
      password: "",
    },
    formRegister: {
      name: "",
      username: "",
      phone: "",
      email: "",
      password: "",
      passwordConfirmation: "",
      address: "",
      gender: "",
    },
    formVerify: {
      email: "",
      token: "",
    },
    formForgetPassword: {
      email: "",
    },
    formForgetPasswordVerify: {
      token: "",
    },
    formResetPassword: {
      email: "",
      token: "",
      password: "",
      passwordConfirmation: "",
    },
    show: true,
    buttonLabel: "Register",
    userAuth() {
      fetch("/badaso-api/v1/auth/user", {
        method: "GET",
        headers: new Headers({
          Authorization: "bearer " + this.token,
        }),
      }).then((response) => {
        if (response.status == 400) {
          document.getElementById("logout_desktop").style.display = "none";
        }
        if (response.status == 200) {
          document.getElementById("login_desktop").style.display = "none";
          document.getElementById("register_desktop").style.display = "none";
        }
      });
    },
    modalLogin() {
      document.getElementById("modal_register").setAttribute("class", "modal");
      document
        .getElementById("modal_login")
        .setAttribute("class", "modal modal-open");
    },
    modalRegister() {
      document.getElementById("modal_login").setAttribute("class", "modal");
      document
        .getElementById("modal_register")
        .setAttribute("class", "modal modal-open");
    },
    modalLogout() {
      document
        .getElementById("modal_close")
        .setAttribute("class", "modal modal-open");
    },
    modalActionClose() {
      document.getElementById("modal_login").setAttribute("class", "modal");
      document.getElementById("modal_close").setAttribute("class", "modal");
      document.getElementById("modal_register").setAttribute("class", "modal");
      document.getElementById("modal_verify").setAttribute("class", "modal");
      document
        .getElementById("modal_forget_password")
        .setAttribute("class", "modal");
      document
        .getElementById("modal_forget_password_verify")
        .setAttribute("class", "modal");
      document
        .getElementById("modal_reset_password")
        .setAttribute("class", "modal");
    },
    modalForgetPassword() {
      document.getElementById("modal_login").setAttribute("class", "modal");
      document
        .getElementById("modal_forget_password")
        .setAttribute("class", "modal modal-open");
    },
    userLogin() {
      fetch("/badaso-api/v1/auth/login", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(this.formLogin),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            this.formLogin.email = "";
            this.formLogin.password = "";
            localStorage.setItem("token", data.data.accessToken);
            document
              .getElementById("modal_login")
              .setAttribute("class", "modal");
            document.getElementById("logout_desktop").style.display = "inherit";
            document.getElementById("login_desktop").style.display = "none";
            document.getElementById("register_desktop").style.display = "none";
          }
        });
    },
    userRegister() {
      this.buttonLabel = "Submitting...";
      fetch("/badaso-api/v1/auth/register", {
        method: "POST",
        headers: {
          Accept: "application/json, text/plain, */*",
          "Content-Type": "application/json",
        },
        body: JSON.stringify(this.formRegister),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            localStorage.setItem("email", this.formRegister.email);
            this.formRegister.name = "";
            this.formRegister.username = "";
            this.formRegister.phone = "";
            this.formRegister.email = "";
            this.formRegister.password = "";
            this.formRegister.passwordConfirmation = "";
            this.formRegister.address = "";
            this.formRegister.gender = "";

            if (data.data.accessToken) {
              document
                .getElementById("modal_register")
                .setAttribute("class", "modal");
              document
                .getElementById("modal_login")
                .setAttribute("class", "modal modal-open");
            } else {
              document
                .getElementById("modal_register")
                .setAttribute("class", "modal");
              document
                .getElementById("modal_verify")
                .setAttribute("class", "modal modal-open");
            }
          }
        });
    },
    userVerify() {
      let email = localStorage.getItem("email");

      fetch("/badaso-api/v1/auth/verify", {
        method: "POST",
        headers: {
          Accept: "application/json, text/plain, */*",
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          email,
          token: this.formVerify.token,
        }),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            this.formVerify.email = "";
            this.formVerify.token = "";
            localStorage.setItem("token", data.data.accessToken);
            location.reload();
            document
              .getElementById("modal_verify")
              .setAttribute("class", "modal");
            document.getElementById("logout_desktop").style.display = "inherit";
            document.getElementById("login_desktop").style.display = "none";
            document.getElementById("register_desktop").style.display = "none";
          }
        });
    },
    logout() {
      fetch("/badaso-api/v1/auth/logout", {
        method: "POST",
        headers: new Headers({
          Authorization: "bearer " + this.token,
        }),
      }).then((response) => {
        localStorage.clear();
        document.getElementById("modal_close").setAttribute("class", "modal");
        document.getElementById("logout_desktop").style.display = "none";
        document.getElementById("login_desktop").style.display = "inherit";
        document.getElementById("register_desktop").style.display = "inherit";
      });
    },
    forgetPassword() {
      fetch("/badaso-api/v1/auth/forgot-password", {
        method: "POST",
        headers: {
          Accept: "application/json, text/plain, */*",
          "Content-Type": "application/json",
        },
        body: JSON.stringify(this.formForgetPassword),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            localStorage.setItem("email", this.formForgetPassword.email);

            document
              .getElementById("modal_forget_password")
              .setAttribute("class", "modal");
            document
              .getElementById("modal_forget_password_verify")
              .setAttribute("class", "modal modal-open");
          }
        });
    },
    forgetPasswordVerify() {
      let email = localStorage.getItem("email");
      fetch("/badaso-api/v1/auth/forgot-password-verify", {
        method: "POST",
        headers: {
          Accept: "application/json, text/plain, */*",
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          email,
          token: this.formForgetPasswordVerify.token,
        }),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            document
              .getElementById("modal_forget_password_verify")
              .setAttribute("class", "modal");
            document
              .getElementById("modal_reset_password")
              .setAttribute("class", "modal modal-open");

            this.formResetPassword.email = localStorage.getItem("email");
            this.formResetPassword.token = this.formForgetPasswordVerify.token;

            const inputEmailElements = document.querySelectorAll(
              'input[name="email_reset_password"]'
            );

            for (const inputEmailElement of inputEmailElements) {
              inputEmailElement.setAttribute(
                "value",
                this.formResetPassword.email
              );
            }

            const inputTokenElements = document.querySelectorAll(
              'input[name="token_reset_password"]'
            );

            for (const inputTokenElement of inputTokenElements) {
              inputTokenElement.setAttribute(
                "value",
                this.formResetPassword.token
              );
            }
          }
        });
    },
    resetPassword() {
      let email_reset = document.getElementById("emailResetPassword").value;
      let token_reset = document.getElementById("tokenResetPassword").value;
      fetch("/badaso-api/v1/auth/reset-password", {
        method: "POST",
        headers: {
          Accept: "application/json, text/plain, */*",
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          email: email_reset,
          token: token_reset,
          password: this.formResetPassword.password,
          passwordConfirmation: this.formResetPassword.passwordConfirmation,
        }),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            document
              .getElementById("modal_reset_password")
              .setAttribute("class", "modal");
            document
              .getElementById("modal_login")
              .setAttribute("class", "modal modal-open");
          }
        });
    },
  };
}

function fetchData() {
    let pathname = window.location.pathname.split(`/`);
    let slug = window.location.pathname.split(pathname[1] + `/`);

  return {
    content: null,
    configuration: [],
    siteTitle: "",
    navbarLogo: "",
    favicon: "",
    productCategories: [],
    slug: ["comfree-theme"],
    data: "",
    navbar: {},
    footer: {},
    products: "",
    productDetails:"",
    slugProduct: slug[1],
    fetchConfiguration() {
      fetch(`/badaso-api/v1/configurations/fetch`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.configuration;

          for (let index = 0; index < this.content.length; index++) {
            if (this.content[index]["group"] == "comfreeTheme") {
              this.configuration = this.content[index]["value"];
              if (this.content[index]["key"] == "comfreeThemeSiteTitle") {
                this.siteTitle = this.content[index]["value"];
              } else if (this.content[index]["key"] == "comfreeThemeFavicon") {
                this.favicon = this.content[index]["value"];
              } else if (
                this.content[index]["key"] == "comfreeThemeNavbarIcon"
              ) {
                this.navbarLogo = this.content[index]["value"];
              }
            }
          }

          let favicon = document.getElementById("favicon");
          favicon.href = this.favicon;
        });
    },
    fetchProductCategory() {
      fetch(`/badaso-api/module/commerce/v1/product-category/public`)
        .then((res) => res.json())
        .then((data) => {
          this.productCategories = data.data.productCategories;
        });
    },
    fetchComfreeContent() {
      fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`)
        .then((res) => res.json())
        .then((data) => {
          this.data = data.data.value;
          this.navbar = this.data.navbar.data;
          this.footer = this.data.footer.data;
          this.footer = {
            title1: this.footer.footer1.data.title.data,
            title2: this.footer.footer2.data.title.data,
            title3: this.footer.footer3.data.title.data,
            description1: this.footer.footer1.data.description.data,
            links: this.footer.footer2.data.list.data,
            copyright: this.footer.copyright.data,
            application:this.footer.footer3.data.application.data,
          };

        });
    },
    fetchProductDetail() {
      fetch(
        `/badaso-api/module/commerce/v1/product/public/read?slug=${this.slugProduct}`,
        {
          method: "GET",
        }
      )
        .then((res) => res.json())
        .then((data) => {
          this.products = data.data.product;

          this.products = {
            name: this.products.name,
            image: this.products.productImage,
            desc: this.products.desc,
            price: this.products.productDetails[0].price,
            category: this.products.productCategory.name,
            sku: this.products.productCategory.SKU,
            quantity: this.products.productDetails[0].quantity,
          };


        })
        .catch((error) => console.error(error));
    },
  };
}


window.fetchData = fetchData;
window.fetchAuthenticated = fetchAuthenticated;
window.Alpine = Alpine;
Alpine.plugin(money);
Alpine.start();
