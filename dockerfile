# Use the official Jenkins image as the base image
FROM jenkins/jenkins:lts

# Skip initial setup wizard by setting the environment variable
ENV JAVA_OPTS="-Djenkins.install.runSetupWizard=false"

# Copy plugin list file (optional)
# You can create a file with a list of Jenkins plugins and copy it into the container.
# Example: COPY plugins.txt /usr/share/jenkins/ref/plugins.txt
# Then, you can install plugins using the install-plugins.sh script.

# Example: Install additional plugins
# RUN /usr/local/bin/install-plugins.sh < /usr/share/jenkins/ref/plugins.txt

# Copy custom configurations (optional)
# If you have custom configurations, scripts, or files to add, copy them into the container.
# Example: COPY custom-config.xml /var/jenkins_home/

# Copy Groovy scripts for Jenkins Configuration as Code (optional)
# Example: COPY init.groovy.d/ /var/jenkins_home/init.groovy.d/

# Expose the HTTP port (default is 8080)
EXPOSE 8080

# Expose the JNLP port (used for agents)
EXPOSE 50000

# User configuration (optional)
# You can change the user and group IDs if needed.
# Example: USER root
# Example: RUN groupmod -g 1001 jenkins && usermod -u 1001 jenkins

# Start Jenkins as the non-root user
USER jenkins

# Define the entry point (optional)
# CMD ["/usr/local/bin/jenkins.sh"]

