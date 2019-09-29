@extends('layouts.app') 
@section('title')
    Documentation
@endsection 
@section('content') 

    <h2> Peer Review Reflection Document </h2>
    <p>

I was able to complete most of the details for this assignment.  A user can register with this website and when they do, they enter their name, email, password, address, if they are a restaurant user or a consumer, and what restaurant they are from or if they aren’t from a restaurant.  A logged-out user can login and a logged in user can log-out from any page using the navigation bar.  Only restaurant users can add dishes to their restaurants, the dish names are all unique and the prices are positive values.  However, the dish name is unique across all restaurants and not just for the select restaurant.  Restaurant users can also delete or edit a dish from their own restaurant.  All the users and guests can see the list of restaurants and when they have been clicked on it, it will take them to the page showing them a list of dishes from that restaurant.  The lists of dishes are paginated with having five dishes per page.  Only a consumer user can purchase a dish when they are on the individual dish page.  Once purchased it will direct the user to a page that tells the user their purchase has been placed, the time it was placed, their name, dish name, dish price, and their address.  The timezone in app.php was changed to Brisbane, Australia to make sure the time is correct.  This information is stored into the orders table and is displayed in the orders page aloing with other orders.  This orders page will only be accessible for restaurant users in the dropdown menu and can only view the orders from their restaurant.  The orders shown consist of the name of the consumer, the dish name, and the date of order.  It is shown in a table with the date, restaurant, user’s name, dish name, dish price, and user’s address.  When the restaurant user adds a new dish, an image can be uploaded for that dish and will be displayed when the information for the dish is.  There are a top five most ordered dishes in the past thirty days page accessible from the navigation bar.  It displays the top five dishes and how many times they have been ordered.  There is a statistic page which can only be accessed by the restaurant users and the link to this page is also in the dropdown menu.  I was able to display the total amount of sales for the restaurant user’s restaurant but was unable to do the weekly total amount of sales.  Once a user has logged in or registered, they are redirected back to the previous page that they were on.  However, when logged out the user is redirected back to the welcome page because is a restaurant user logs out on a page unaccusable to guests, it displays an error.  I was unable to do requirement 14, which was to add another user type administrator.  I created a shopping cart that is only accessible by consumer users in the dropdown menu.  The cart page displays the dishes name, price, the date it was added to the cart, and the total price of the dishes in the cart.  The dishes are added to the cart from the individual dish item page, and the consumer can delete dishes from the cart.  I was unable to complete the consumer purchasing the dishes by adding them to the orders table and deleting the dishes in the cart.  
    
    </p>

    <br>
    <h2> Short Document </h2>
    <p>

    Each week I got my weekly labs peer reviewed before being marked and have only peer reviewed two times.  Each time that I was marked I would explain what I did while showing the peer reviewer the website created, and then once I have finished this I would show them the code of how I was able to do the tasks.  There were times where I struggled with a task and if the peer reviewer had completed the task, they would take the time to explain to me how to do it.  I found this helpful to understand my own code more and get help for parts I was stuck on.  The times I did peer review someone I would make sure to ask questions if a part of their code was explained in a way I didn’t understand, or they didn’t cover in their explanation.  Having what someone else has done explained to me was helpful to compare their code to mine to see if there is something that would have worked better than what I did.  The peer reviews were helpful in getting a better understanding of what the code does for each weekly lab, which was helpful in understanding how to do the assignments.
    
    </p>

    <br>
    <h2> ER Diagram </h2>
    <img src="{{url('/products_images/ERDiagram.png')}}" alt="ER Diagram" style="width:500px;height:500px;">

@endsection