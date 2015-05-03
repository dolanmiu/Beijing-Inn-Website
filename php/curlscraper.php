<?php
    // Defining the basic cURL function
    function curl($url) {
        // Assigning cURL options to an array
        /*$options = Array(
            CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
            //CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
            CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
            CURLOPT_CONNECTTIMEOUT => 120,   // Setting the amount of time (in seconds) before the request times out
            CURLOPT_TIMEOUT => 120,  // Setting the maximum amount of time for cURL to execute queries
            CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
            CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
            CURLOPT_HEADER => false,
            CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
            );
        /*$options = Array(CURLOPT_URL => $url, 
                     CURLOPT_HEADER => false 
                    ); 

        $ch = curl_init();  // Initialising cURL 
        curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL 
        return $data;   // Returning the data from the function */
        $ch = curl_init();  // Initialising cURL
        curl_setopt($ch, CURLOPT_URL, $url);    // Setting cURL's URL option with the $url variable passed into the function
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Setting cURL's option to return the webpage data
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL
        return $data;   // Returning the data from the function
    }

    function scrape_between($data, $start, $end) {
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }

    function getReviews() {
        /*$file_string = file_get_contents('http://www.tripadvisor.co.uk/Restaurant_Review-g503904-d789989-Reviews-Beijing_Inn-Gillingham_Kent_England.html');
        preg_match_all('/<p class="partial_entry">(.*)/i', $file_string, $reviewText);
        preg_match_all('/<li><a href="(.*)">(.*)<\/a><\/li>/i', $file_string, $links);
        //$title_out = $title[0];
        //echo $title_out;
        for($i = 0; $i < count($reviewText[1]); $i++) {
            echo '<li>' . ' - ' . $reviewText[1][$i] . '</li>';
        }

        for($i = 0; $i < count($links[1]); $i++) {
            echo '<li>' . $links[2][$i] . ' - ' . $links[1][$i] . '</li>';
        }*/
        $url = "http://www.tripadvisor.co.uk";    // Assigning the URL we want to scrape to the variable $url
        //$url = "http://www.google.com";
        $results_page = curl($url); // Downloading the results page using our curl() funtion
        //$results_page = scrape_between($results_page, '<div id="REVIEWS" class="deckB review_collection">', ' injektReviewsContent'); // Scraping out only the middle section of the results page that contains our results

        $separate_results = explode('<div class="col2of2">', $results_page);   // Expploding the results into separate parts into an array

        foreach ($separate_results as $separate_result) {
            if ($separate_result != "") {
                $review = scrape_between($separate_result, '<p class="partial_entry">', "</p>"); // Scraping the page ID number and appending to the IMDb URL - Adding this URL to our URL array
                if ($review != "") {
                    if (strpos($review,'<') !== false) {
                        $textReview = explode('<', $review);
                        $textReviews = trim($textReview[0]);
                    } else {
                        $textReviews = trim($review);
                    }
                } else {
                    $textReviews = "";
                }

                $star = scrape_between($separate_result, 'content="', "\">"); // Scraping the page ID number and appending to the IMDb URL - Adding this URL to our URL array
                if ($textReviews !== "") {
                    $fullReview = new FullReview($textReviews, $star);
                    $fullReview->starRating = $star;
                    $fullReview->textRating = $textReviews;
                    $fullReviews[] = $fullReview;
                }
            }
        }
        return $results_page; // Printing out our array of URLs we've just scraped*/
    }

    class FullReview
    {
        public $starRating;
        public $textRating;

        function __construct($text, $star) { 
            $textRating = $text;
            $starRating = $star;
        } 
    }
?>