SimplePie
SimplePie is a very fast and easy-to-use class, written in PHP, that puts the 'simple' back into 'really simple syndication'. Flexible enough to suit beginners and veterans alike, SimplePie is focused on speed, ease of use, compatibility and standards compliance.

Requirements

PHP 5.2.0 or newer
libxml2 (certain 2.7.x releases are too buggy for words, and will crash)
Either the iconv or mbstring extension
cURL or fsockopen()
PCRE support
If you're looking for PHP 4.x support, pull the "one-dot-two" branch, as that's the last version to support PHP 4.x.

What comes in the package?

library/ - SimplePie classes for use with the autoloader
autoloader.php - The SimplePie Autoloader if you want to use the separate file version.
README.markdown - This document.
LICENSE.txt - A copy of the BSD license.
compatibility_test/ - The SimplePie compatibility test that checks your server for required settings.
demo/ - A basic feed reader demo that shows off some of SimplePie's more noticeable features.
idn/ - A third-party library that SimplePie can optionally use to understand Internationalized Domain Names (IDNs).
build/ - Scripts related to generating pieces of SimplePie
test/ - SimplePie's unit test suite.
Where's simplepie.inc?

Since SimplePie 1.3, we've split the classes into separate files to make it easier to maintain and use.

If you'd like a single monolithic file, you can run php build/compile.php to generate SimplePie.compiled.php, or grab a copy from dev.simplepie.org (this is kept up-to-date with the latest code from Git).

To start the demo

Upload this package to your webserver.
Make sure that the cache folder inside of the demo folder is server-writable.
Navigate your browser to the demo folder.
Need support?

For further setup and install documentation, function references, etc., visit the wiki. If you're using the latest version off GitHub, you can also check out the API documentation.

If you can't find an answer to your question in the documentation, head on over to one of our support channels. For bug reports and feature requests, visit the issue tracker.

Project status

SimplePie is currently maintained by Ryan McCue.

As an open source project, SimplePie is maintained on a somewhat sporadic basis. This means that feature requests may not be fulfilled straight away, as time has to be prioritized.

If you'd like to contribute to SimplePie, the best way to get started is to fork the project on GitHub and send pull requests for patches. When doing so, please be aware of our coding standards.

Authors and contributors

Current

Ryan McCue (Maintainer, support)
Alumni

Ryan Parman (Creator, developer, evangelism, support)
Geoffrey Sneddon (Lead developer)
Michael Shipley (Submitter of patches, support)
Steve Minutillo (Submitter of patches)
Contributors

For a complete list of contributors:

Pull down the latest SimplePie code
In the simplepie directory, run git shortlog -ns
License

New BSD license