<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" rel="stylesheet" />
    <style>
      .dropzone {
        border: 2px dashed #ccc;
        border-radius: 10px;
        background-color: #fafafa;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: #666;
        cursor: pointer;
        transition: border-color .3s ease-in-out;
      }
      .dropzone:hover {
        border-color: #3b7afe;
      }
      .dz-preview {
        position: relative;
        display: inline-block;
        margin: 10px;
      }
      .dz-preview .dz-image {
        border-radius: 10px;
        max-height: 200px;
        overflow: hidden;
      }
      .dz-preview .dz-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .dz-preview .dz-details {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
        padding: 5px 10px;
        font-size: 16px;
      }
      .dz-preview .dz-remove {
        position: absolute;
        top: 5px;
        right: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: opacity .3s ease-in-out;
      }
      .dz-preview:hover .dz-remove {
        opacity: .7;
      }

      .modal-dialog {
        max-width: 600px;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center">
          <h1>Centered Heading</h1>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Open Modal</button>
          @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <div class="col">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter your first name">
                  </div>
                  <div class="col">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter your last name">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                  </div>
                  <div class="col">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="airdropAddress" class="form-label">Where do we airdrop the Family Tokens? (Metamask BEP-20 address...)</label>
                  <input type="text" class="form-control" id="airdropAddress" name="airdrop_address" placeholder="Enter your Metamask BEP-20 address">
                </div>
                <div class="mb-3">
                  <label for="tokenAmount" class="form-label">Enter the amount of Family Tokens you want to get (or click number to write in manually)</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="tokenAmount" name="token_amount" placeholder="Enter the amount of Family Tokens">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="payment_currency" class="form-label">Your preferred payment currency:</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment_currency" id="ethRadio" value="ETH" checked>
                    <label class="form-check-label" for="ethRadio">ETH</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment_currency" id="usdtRadio" value="USDT">
                    <label class="form-check-label" for="usdtRadio">USDT (ERC-20)</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment_currency" id="busdRadio" value="BUSD">
                    <label class="form-check-label" for="busdRadio">BUSD</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment_currency" id="bnbRadio" value="BNB">
                    <label class="form-check-label" for="bnbRadio">BNB</label>
                  </div>
                  <div class="mt-2 input-group">
                    <input type="text" class="form-control" id="currencyValue" readonly>
                    <button class="btn btn-outline-secondary" type="button" id="copyButton">Copy</button>
                  </div>
                </div>
                
                <div class="mb-3">
                  <label for="paymentScreenshot" class="form-label">Please Attach Screenshot of your Payment</label>
                  {{-- <div class="dropzone" name="image" id="myDropzone"></div> --}}
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script>
      // Initialize Dropzone
      Dropzone.autoDiscover = false;
      var myDropzone = new Dropzone("#myDropzone", {
        url: "/upload",
        maxFiles: 1,
        acceptedFiles: "image/*",
        dictDefaultMessage: "Drag and drop your payment screenshot here or click to upload",
        dictFallbackMessage: "Your browser does not support drag and drop",
        dictFileTooBig: "File size must be less than 1 MB",
        dictInvalidFileType: "Only images are allowed",
        dictCancelUpload: "Cancel upload",
        dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
        dictRemoveFile: "Remove file",
        dictMaxFilesExceeded: "You can only upload one file",
        dictUploadError: "Upload failed"
      });
    </script>
    <script>
      // Function to copy the currency value to clipboard
      function copyCurrencyValue() {
        const currencyValue = document.querySelector("#currencyValue").value;
        navigator.clipboard.writeText(currencyValue);
        document.querySelector("#copyButton").innerHTML = "Copied";
      }
    
      // Add click event listener to radio buttons
      const radios = document.querySelectorAll('input[name="paymentCurrency"]');
      radios.forEach((radio) => {
        radio.addEventListener("click", () => {
          // Update currency value based on the selected radio button
          const value = radio.value;
          document.querySelector("#currencyValue").value = value;
          document.querySelector("#copyButton").innerHTML = "Copy";
        });
      });
    
      // Add click event listener to copy button to copy currency value to clipboard
      const copyButton = document.querySelector("#copyButton");
      copyButton.addEventListener("click", copyCurrencyValue);
    </script>
  </body>
</html>