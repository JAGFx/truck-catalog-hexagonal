# Truck configurator hexagonal
POC for an hexagonal architecture on Symfony

## Main purpose

This app must allow to configure a Truck.

The truck is composed with part.
Each part have some links and requirement with each other.

A part is a frame, an engine, a gearbox and / or a cab

## What should be possible

1. Have a list of all available part for a specific brand
2. Have a list of all saved truck configurations
3. Know which one part is compatible with
4. Know if the configuration is valid = All part must be linked and satisfy requirements with all others.
5. Save the configuration on file or in external source

<hr>

- [Business rules](doc/BUSINESS_RULES.md)