#/usr/bin/bash
if [ ! -d "vendor" ]
then
  echo "Vendor exist --- nothing to install."
  echo "upgrading current packages"
  composer upgrade

elseif
  echo "Vendor --- does not exist. Proceeding to install."
  composer install

fi

# validating the package
# validate without-checks
echo "validation of composer package without checks"
composer validate --no-check-all

# validate
echo "normal validation of composer package"
composer validate

echo "initiating PHPUnit tests"
# Execute PHPUnit tests
./vendor/bin/phpunit tests