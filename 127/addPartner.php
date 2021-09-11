<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Partner</h1>
                    <form accept-charset="utf-8" method="post" enctype="multipart/form-data" action="listPartner.php">
                        <div class="form-group">
                            <label>Partner Image Upload</label>
                            
                            <div class="uk-margin" uk-margin>
                                <div uk-form-custom="target: true">
                                    <input type="file" name="partner_img">
                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Partner Title</label>
                            <input type="text" class="form-control" name="partner_title" aria-describedby="PartnerTitleHelp" placeholder="Type Title Here">
                            <small id="PartnerTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Partner Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="partner_discription" aria-describedby="PartnerDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="PartnerDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <div class="form-group">
                            <label>Partner Link</label>
                            <input type="text" class="form-control" name="partner_link" aria-describedby="PartnerLinkHelp" value="javascript:void(0);">
                            <small id="PartnerLinkHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="partner">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>