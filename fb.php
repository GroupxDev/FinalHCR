$page_id = '314170008594507';
$access_token = 'CAACEdEose0cBALmCYbJuUu3TfDiNqSJXE6N7lL11pYyGn94MGhWFWHH4E1Soq6gYfxGzdIlNPXtgyXm8zjFgF0Dlflr90AV6vy6fdjD3zfAsYfyRKChYqTg8lNJIhPLRZAE6s945NmWlBJLt2iM9ZAG4qZAxPlZCdqclgwS9S70Cmfw2Q29w6VCzW7WLMoS3snZAq7jY1V2hevoZBC9MtP';
//Get the JSON
$json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . 
'/posts?access_token=' . $access_token);
//Interpret data
$fbdata = json_decode($json_object);

foreach ($fbdata->data as $post )
{
$posts .= '<p><a href="' . $post->link . '">' . $post->story . '</a></p>';
$posts .= '<p><a href="' . $post->link . '">' . $post->message . '</a></p>';
$posts .= '<p>' . $post->description . '</p>';
$posts .= '<br />';
}
//Display the posts
echo $posts;