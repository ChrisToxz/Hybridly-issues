# Hybridly Tenant

Reproduction of features that are not working in Hybridly when using with a subdomain.


### Table actions issue
`NS_ERROR_DOM_BAD_URI` error
- http://localhost/table
- http://sub.localhost/table

### Route util helper issue
Returns `http://localhost/route` instead of `http://sub.localhost/route`
- http://localhost/route
- http://sub.localhost/route

