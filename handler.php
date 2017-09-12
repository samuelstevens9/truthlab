<?php 

if(isset($_POST['email']) && $_POST['email']){
  

    print "request.data", request.data
    body = "first_name:" + request.data["fname"] + "\r\n"
    body += "last_name:" + request.data["lname"] + "\r\n"
    body += "email:" + request.data["email"] + "\r\n"
    body += "company:" + request.data["company"] + "\r\n"
    try:
        blog = request.data["blog"]
        body += "blog:" + "Add \r\n"
    except:
        body += "blog:" + "NOPE \r\n"

    simple_email("Blog from content", body=body, to="05l65ctz@robot.zapier.com", frm="scott@truthlab.com")

    return HttpResponseRedirect(request.data["tl_free_whitepaper_form"])
    //Get file type and set it as Content Type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    header('Content-Type: ' . finfo_file($finfo, $filename));
    finfo_close($finfo);

    //Use Content-Disposition: attachment to specify the filename
    header('Content-Disposition: attachment; filename='.basename($filename));

    //No cache
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');

    //Define file size
    header('Content-Length: ' . filesize($filename));

    ob_clean();
    flush();
    readfile($filename);
    exit;
}else{
  header("Location: http://truthlab.com/customer-experience-advantage/");
}

?>