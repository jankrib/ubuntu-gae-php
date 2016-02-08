# -*- mode: ruby -*-
# vi: set ft=ruby :

# Template for Google App Engine PHP with vagrant

Vagrant.configure(2) do |config|

  config.vm.box = "jankrib/ubuntu-gae-php"

  config.vm.network "forwarded_port", guest: 8080, host: 8080
  config.vm.network "forwarded_port", guest: 8000, host: 8000

  config.vm.provision :shell, :privileged => false,  :path => "bin/startup.sh", :run => 'always'
end
