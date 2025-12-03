Why ?
    To built better product/Websites
    To Earn/Grow better
How ?
    Build product that will attract lost of clients


    Build a free product attract traffic , so you can show Ads to earn money
    Build a compelling product so you can charge the client to use the Software as Service(SAAS)
    Youtube

    Purchase and Sale => E-Commerce Website Portal

    Conception of product Idea
    Gathering Requirement(Listing Modules/Functionality)
    Documentation(BRD,FRD,TDD)
    Estimation


    -Roles & Responsibilites    
        Superadmin
            Platform providers - MVP
            Bug Fixes
            Enhancing the Platform with latest Tech    
        Vendor
            Authentication/KYC - MVP
                Signup
                    name
                    password
                    usertype
                DB
                    create user table
                        userid - int,primary,AI
                        username  - varchar
                        password - varchar
                        usertype - varchar
                        created_date - timestamp - default to current timestamp
                Login

            Manage Product - MVP
                Add product
                    name
                    price
                    description/features
                    images
                DB
                    pid - AI
                    name - varchar(80)
                    price - float
                    detail - text
                    impath - varchar(200) - image will be stored in server disk and path of that image will be liked into the    impath column
                    owner - int - foreign key of userid
                    created_date - timestamp - default to current timestamp

                View Product
                Update Product
                Delete Product
            Manage Orders - MVP
                View Order
                Update Order
                Deliver Order
        Customer
            Authentication - MVP
            View Product  MVP
            Compare Product 
            Manage Cart - MVP
                Add
                view
                edit
                delete
            Place Order - MVP
                Payment Gateway
                COD
            Track order
            View Order History - MVP
            Review/Rate Purchased Orders
            Replace/Refund/Contact Customer care

        Delivery Partner 
            Get Orders from Vendor
            Manage Delivery/Returns
        Customer Care
        Legal Advisors
            Complainces for the territory
        Auditors/Accoutants


    MVP in product development
    USP

    